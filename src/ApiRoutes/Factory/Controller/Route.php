<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 11:56:25
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 11:57:38
 */

namespace ApiRoutes\Factory\Controller;

use ApiRoutes\Service\Route as Service;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class Route implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName(
            $container->get(Service::class)
        );
    }
}
