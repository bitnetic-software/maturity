# A simple software maturity feature flag configuration package for Laravel 5.5/5.6

Laravel ships with _.env_ files to give you great flexibility over the configuration and behaviour of your application depending on the environment it is running in.

However, specific environments are a more _technical_ aspect, and often this is not the driver for when a functionality should be available or not.
Be it _local_, _docker_ or _test_ - there are a mixture of situations where you would probably not want your software to access a critical 3rd party API, apply strict business rules, store certain data or behave a simpler way than usual.

Using a _maturity_-based approach, you can bundle that behaviour into a handful of levels and and apply it to the different technical environments you are going to set up.

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

or in your _DatabaseSeeder.php_:

    public function run()
    {
        $this->call(\Acme\Cars\PlateRuleSeeder::class);

        if (Maturity::has('SEED_DEMO_DATA')) {
            // ...
        }
    }
