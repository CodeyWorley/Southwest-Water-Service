<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('mg.southwestwaterservice.com'),
        'secret' => env('MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCavbcbYNN+DM3tq8KySqFg+6bqNP7W5n913AnMC0dUGpG/RlkqdYErSd7YAupb1eu18NdpfaCkr/XttPfuzl6BJPlQXP8Ql+7Sqt5Z54nYmw6rOphMB4ezRqS9QNvIyxTO6Q4tpsXS/4GC993W9mV7RmJtZDGII5stSE0DYKnlPQIDAQAB'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
