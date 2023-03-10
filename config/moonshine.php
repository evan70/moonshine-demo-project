<?php

use Leeto\MoonShine\Models\MoonshineUser;

return [
    'title' => env('MOONSHINE_TITLE', 'MoonShine'),
	'logo' => env('MOONSHINE_LOGO', ''),

    'route' => [
        'prefix' => env('MOONSHINE_ROUTE_PREFIX', 'admin'),
        'middleware' => ['web', 'moonshine'],
    ],

    'auth' => [
        'guard' => 'moonshine',
        'guards' => [
            'moonshine' => [
                'driver'   => 'session',
                'provider' => 'moonshine',
            ],
        ],
        'providers' => [
            'moonshine' => [
                'driver' => 'eloquent',
                'model'  => MoonshineUser::class,
            ],
        ],
    ],
    'extensions' => [
        //
    ],
    'tinymce' => [
        'token' => 'skahid6h92h20zlwiueutx5kc78ow2bin44x9r6zrjp1xoh4'
    ],

    'socialite' => [
        'github' => '/images/icons/github-mark.svg'
    ]
];
