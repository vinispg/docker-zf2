<?php

namespace Application\Factory\Controller;

use Application\Controller\IndexController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $myService = $realServiceLocator->get('Application\Service\MyService');
        $pessoaService = $realServiceLocator->get('Application\Service\PessoaService');

        return new IndexController($myService, $pessoaService);
    }

}