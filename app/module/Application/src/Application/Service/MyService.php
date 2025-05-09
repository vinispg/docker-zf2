<?php

namespace Application\Service;

use Zend\Db\TableGateway\TableGateway;

class MyService
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
