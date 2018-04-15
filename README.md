# A simple maturity feature flag configuration package for Laravel 5.5/5.6

## How to use it

Insert your desired feature flags:

    $ vi config/maturity.php
    
Set your planned environment's maturities:

    $ vi .env.docker
    $ MATURITY=DEV
    
Check the feature flag within your business code:

    if (Maturity::has('PROCESS_CREDIT_CARD')) {
        // ...
    }
