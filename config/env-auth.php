<?php

/*
 * You can place your custom package configuration in here.
 */
return [

    /**
     * Basic authentication
     */
    'basic' => [

        'username' => env('BASIC_USERNAME'),

        'password' => env('BASIC_PASSWORD'),
    ],

    /**
     * Secret key authentication
     */
    'secret' => env('AUTH_SECRET_KEY'),

];
