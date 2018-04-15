# A simple software maturity feature flag configuration package for Laravel 5.5/5.6

## How to install it

Just pull in the package via _composer_:

    $ composer install bitnetic/maturity "0.1.*"

The maturity package comes with a config file named _config/maturity.php_. This file is deployed to the central laravel configuration directory using the _vendor:publish_ command:

    $ php artisan vendor:publish --tag=config

## How to use it

Insert your desired feature flags:

    $ vi config/maturity.php

Set your planned environment's maturities, e.g.:

    $ echo "MATURITY=DEV" >> .env
    $ echo "MATURITY=PROD" >> .env.aws

Check and use feature flags within your business code, e.g.:

    if (Maturity::has('PROCESS_CREDIT_CARDS')) {
        // ...
    }
