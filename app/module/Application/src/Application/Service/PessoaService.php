<?php

namespace Application\Service;

use Zend\Db\TableGateway\TableGateway;

class PessoaService
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function getAdapter()
    {
        return $this->tableGateway->getAdapter();
    }

    public function getStatusConnection()
    {
        $dbAdapter = $this->tableGateway->getAdapter();
        $dbAdapter->getDriver()->getConnection()->connect();
        $connection = $dbAdapter->getDriver()->getConnection();
        return $connection->isConnected();
    }
}