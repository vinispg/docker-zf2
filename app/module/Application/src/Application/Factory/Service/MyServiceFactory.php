<?php

namespace Application\Factory\Service;

use Application\Service\MyService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MyServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $message = 'Hello World!';

        return new MyService($message);
    }
}