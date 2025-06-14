<?php

return [

    'defaults' => [
        'guard' => 'web', // Cliente usa esse
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */

    'guards' => [
        'web' => [ // Clientes (usuários normais)
            'driver' => 'session',
            'provider' => 'users',
        ],

        'adm' => [ // Admins
            'driver' => 'session',
            'provider' => 'adms',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    */

    'providers' => [
        'users' => [ // Cliente
            'driver' => 'eloquent',
            'model' => App\Models\User::class, // <- você disse que usa isso
        ],

        'adms' => [ // Admins
            'driver' => 'eloquent',
            'model' => App\Models\Adm::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Reset
    |--------------------------------------------------------------------------
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],

        'adms' => [
            'provider' => 'adms',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    */

    'password_timeout' => 10800,

];
