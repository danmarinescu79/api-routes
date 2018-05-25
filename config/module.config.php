<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 11:52:43
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 12:02:33
 */

namespace ApiRoutes;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'route-admin' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/route/admin[/:id]',
                    'defaults' => [
                        'controller' => Controller\Route::class,
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\Route::class => Factory\Controller\Route::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            Service\Route::class => Factory\Service\Route::class,
        ],
    ],
    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'paths' => [__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity'],
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                ],
            ],
        ],
    ],
];
