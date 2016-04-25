<?php

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
        'storage' => SessionArrayStorage::class,
        'validators' => [
            // RemoteAddr::class,
            // HttpUserAgent::class,
        ],
    ],
];
