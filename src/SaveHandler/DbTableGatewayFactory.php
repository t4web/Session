<?php

namespace T4web\Session\SaveHandler;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\Adapter\Adapter as DbAdapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\Session\SaveHandler\DbTableGatewayOptions;

class DbTableGatewayFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');
        if (!isset($config['session']['save_handler_options']['db_table']['table'])) {
            throw new \RuntimeException("Missing required parameter 'table'. Check config section ['sessions']['save_handler_options']['db_table']");
        }

        $dbAdapter = $serviceLocator->get(DbAdapter::class);

        $tableGateway = new TableGateway($config['session']['save_handler_options']['db_table']['table'], $dbAdapter);
        return new DbTableGateway($tableGateway, new DbTableGatewayOptions());
    }
}