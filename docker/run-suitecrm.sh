#!/bin/sh

# https://docs.suitecrm.com/8.x/admin/installation-guide/downloading-installing/#_1_4_configure_php_error_reporting
sed -i 's/error_reporting = .*/error_reporting = E_ALL \& ~E_DEPRECATED \& ~E_STRICT \& ~E_NOTICE \& ~E_WARNING/g' "$PHP_INI_DIR/php.ini"

# Run composer to install packages
composer install

# Change file permissions and owners
chown -R www-data public/*
chown -R www-data cache
chown -R www-data logs
chown www-data bin/console
chmod +x bin/console

# Run the SuiteCRM installation command
# bin/console suitecrm:app:install -u $DATABASE_USERNAME -p $DATABASE_PASSWORD -U $DATABASE_USERNAME -P $DATABASE_PASSWORD -H $DATABASE_SERVER -Z $DATABASE_PORT -N $DATABASE_NAME -S $SITE_HOST

# Start Apache in the foreground
exec /usr/local/bin/apache2-foreground