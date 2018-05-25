<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 11:56:10
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 18:10:12
 */

namespace ApiRoutes\Controller;

use ApiRoutes\Service\Route as Service;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class Route extends AbstractRestfulController
{
    private $service;
    
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getList() : JsonModel
    {
        $data = $this->service->getPaginated($this->params());
        
        return new JsonModel($data);
    }

    public function get($id) : JsonModel
    {
        return new JsonModel();
    }

    public function create($data) : JsonModel
    {
    }

    public function update($id, $data) : JsonModel
    {
    }
}
