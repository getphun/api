<?php
/**
 * api config file
 * @package api
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'api',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/api',
    '__files' => [
        'modules/api/config.php' => [ 'install', 'remove', 'update' ],
        'modules/api/controller' => [ 'install', 'remove' ]
    ],
    '__dependencies' => [],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'ApiController' => 'modules/api/controller/ApiController.php'
        ],
        'files' => []
    ],
    '_gates' => [
        'api' => [
            'path' => '/api'
        ]
    ],
    '_routes' => [
        'api' => [
            '404' => [
                'handler' => 'Api::notFound'
            ]
        ]
    ]
];