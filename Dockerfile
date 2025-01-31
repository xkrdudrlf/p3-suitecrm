# syntax=docker/dockerfile:1.3
FROM php:8.1-apache

# Environment variables
ENV WORKING_DIR=/var/www/suitecrm
ENV TEMP_WORKING_DIR=/temp_suitecrm
ENV SUITECRM_VERSION=8.6.1

# Update system and install necessary packages and PHP extensions
RUN apt-get update && \
    apt-get dist-upgrade -y && \
    apt-get autoremove -y && \
    apt-get install -y --no-install-recommends \
        vim \
        git \
        nodejs \
        npm \
        libc-client-dev \
        libicu-dev \
        libkrb5-dev \
        libldap2-dev \
        libpng-dev \
        libzip-dev \
        zlib1g-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libonig-dev \
        pkg-config && \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install -j$(nproc) \
        soap \
        mysqli \
        pdo_mysql \
        curl \
        intl \
        zip \
        imap \
        gd \
        xml \
        mbstring \
        sockets \
        bcmath \
        ldap && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install global npm packages
RUN npm install -g @angular/cli yarn

# Clone SuiteCRM and remove unnecessary files
RUN git clone --branch "v${SUITECRM_VERSION}" https://github.com/salesagility/SuiteCRM-Core.git ${TEMP_WORKING_DIR} && \
    rm -rf ${TEMP_WORKING_DIR}/.git ${TEMP_WORKING_DIR}/.github ${TEMP_WORKING_DIR}/.gitlab

# Copy Composer from the composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR ${WORKING_DIR}

# Copy the start script
COPY docker/run-suitecrm.sh /usr/local/bin/run-suitecrm.sh
COPY docker/config/apache/suitecrm.conf /etc/apache2/conf-available/suitecrm.conf

RUN chmod 755 /usr/local/bin/run-*.sh && \
    /usr/sbin/a2enconf suitecrm && \
    /usr/sbin/a2enmod rewrite

# Start Apache and SuiteCRM installation on container startup
CMD /usr/local/bin/run-suitecrm.sh