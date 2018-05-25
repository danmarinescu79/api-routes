<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 17:50:00
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 18:04:54
 */

namespace ApiRoutes\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator;
use Zend\Mvc\Controller\Plugin\Params;
use Zend\Paginator\Paginator;

class Resource extends EntityRepository
{
    public function getPaginated(Params $params)
    {
        $page         = $params->fromQuery('page', 1);
        $perPage      = $params->fromQuery('perPage', 20);
        $queryBuilder = $this->createQueryBuilder('resources');
        $paginator    = new Paginator(new DoctrinePaginator(new ORMPaginator($queryBuilder->getQuery())));
        
        return $paginator->setCurrentPageNumber($page)->setItemCountPerPage($perPage);
    }
}
