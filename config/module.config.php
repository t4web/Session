<?php

namespace T4web\Session;

use Zend\Session\Config\SessionConfig;
use Zend\Session\Storage\SessionArrayStorage;
use Zend\Session\Validator\RemoteAddr;
use Zend\Session\Validator\HttpUserAgent;

return [
    'session' => [
        'config' => [
            'class' => SessionConfig::class,
            'options' => [
                // see http://framework.zend.com/manual/current/en/modules/zend.session.config.html
                // 'name' => 'myapp',
            ],
        ],
        //'save_handler' => SaveHandler\DbTableGatewayFactory::class,
        //'save_handler_options' => [
        //    'db_table' => [
        //        'table' => 'sessions'
        //    ],
        //],
        'storage' => SessionArrayStorage::class,
        'validators' => [
            // RemoteAddr::class,
            // HttpUserAgent::class,
        ],
    ],
];
