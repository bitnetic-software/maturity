<?php

use Bitnetic\Maturity\MaturityLevel;

/* Adapt this freely to your needs,
 * including your own wording for levels and feature sets.
 *
 * You can use the features list as a simple list of features
 * (in = true/enabled, not in = false/disabled) or
 * use it as a key-value list, where you can control the behaviour of a feature.
 * You can also use it as a key-boolean flag list (.e.g. "PROCESS_CREDIT_CARDS" => false/true).
 */
return [
    'current' => env('MATURITY', MaturityLevel::DEV),
    'levels' => [
        MaturityLevel::DEV,
        MaturityLevel::STAGE,
        MaturityLevel::PROD,
    ],
    'features' => [
        MaturityLevel::DEV => [

        ],
        MaturityLevel::STAGE => [

        ],
        MaturityLevel::PROD => [

        ],
    ],
];
