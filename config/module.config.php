<?php

use Zend\Session\Config\SessionConfig;
use Zend\Session\Storage\SessionArrayStorage;
use Zend\Session\Validator\RemoteAddr;
use Zend\Session\Validator\HttpUserAgent;

return array(
    'session' => array(
        'config' => array(
            'class' => SessionConfig::class,
            'options' => array(
                'name' => 'myapp',
            ),
        ),
        'storage' => SessionArrayStorage::class,
        'validators' => array(
            RemoteAddr::class,
            HttpUserAgent::class,
        ),
    ),
);
