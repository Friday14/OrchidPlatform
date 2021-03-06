<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Install
    |--------------------------------------------------------------------------
    |
    | Setup Activation Flag
    | If the flag is set to false, then the files can be overwritten
    |
    */

    'install' => env('APP_INSTALL', false),

    /*
    |--------------------------------------------------------------------------
    | Enable
    |--------------------------------------------------------------------------
    |
    | If the dashboard is turned off, then all routes stop working,
    | this is required if you are building your control panel or you do not need it
    |
    */

    'enable' => true,

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    | Available settings
    |
    */

    'auth'    => [
        'display' => true,
        'image'   => '/orchid/img/background.jpg',
        //'slogan'  => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Widgets that will be displayed on the main screen
    |
    */

    'main_widgets' => [
        Orchid\Platform\Http\Widgets\GoogleAnalyticsWidget::class,
    ],

];
