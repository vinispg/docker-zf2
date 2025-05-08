<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Service\MyService;
use Application\Service\PessoaService;
use Zend\Db\TableGateway\TableGateway;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $myService;
    protected $pessoaService;
    public function __construct(
        MyService $myService,
        PessoaService $pessoaService
    )
    {
        $this->myService = $myService;
        $this->pessoaService = $pessoaService;
    }
    public function indexAction()
    {
//        var_dump($this->pessoaService->getAdapter());
        var_dump($this->pessoaService->getStatusConnection());
        return new ViewModel();
    }
}