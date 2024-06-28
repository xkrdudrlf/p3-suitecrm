#!/bin/sh

# https://docs.suitecrm.com/8.x/admin/installation-guide/downloading-installing/#_1_4_configure_php_error_reporting
sed -i 's/error_reporting = .*/error_reporting = E_ALL \& ~E_DEPRECATED \& ~E_STRICT \& ~E_NOTICE \& ~E_WARNING/g' "$PHP_INI_DIR/php.ini"

# Copy files from the temporary directory to the mounted directory
if [ -d $TEMP_WORKING_DIR ]; then
    rm -rf $WORKING_DIR
    cp -r $TEMP_WORKING_DIR/* $WORKING_DIR
    cp -r $TEMP_WORKING_DIR/.* $WORKING_DIR
    rm -rf $TEMP_WORKING_DIR
fi

# Run composer to install packages
composer install

# Run the SuiteCRM installation command
chmod +x bin/console
bin/console suitecrm:app:install -u $DATABASE_USERNAME -p $DATABASE_PASSWORD -U $DATABASE_USERNAME -P $DATABASE_PASSWORD -H $DATABASE_SERVER -Z $DATABASE_PORT -N $DATABASE_NAME -S $SITE_HOST

# Change file owners for permissions
chown www-data -R $WORKING_DIR

# Build FE app
yarn install
yarn run build:common
yarn run build:core
yarn run build:shell

# Start Apache in the foreground
exec /usr/local/bin/apache2-foreground