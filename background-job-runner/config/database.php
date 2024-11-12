<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
     */

    'default' => 'sqlite', // Set to 'sqlite' for an in-memory database

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    |
     */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => ':memory:', // Use in-memory SQLite database
            'prefix' => '',
        ],

        // Comment out or remove other connections if not needed
        // 'mysql' => [
        //     'driver' => 'mysql',
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'database' => env('DB_DATABASE', 'laravel'),
        //     'username' => env('DB_USERNAME', 'root'),
        //     'password' => env('DB_PASSWORD', ''),
        //     ...
        // ],

        // Other connections can be commented out...

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
     */

    'migrations' => [
        'table' => '', // Avoid migration attempts by setting this empty
        'update_date_on_publish' => true,
    ],

];
