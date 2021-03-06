<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 11:56:32
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 17:43:46
 */

namespace ApiRoutes\Factory\Service;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class Route implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName(
            $container->get(EntityManager::class)
        );
    }
}
