<?php

namespace Application\Factory\Service;

use Application\Model\Pessoa;
use Application\Service\PessoaService;
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PessoaServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get(Adapter::class);

        return new PessoaService(
            new TableGateway(
                'pessoa',
                $dbAdapter
            )
        );
    }

}