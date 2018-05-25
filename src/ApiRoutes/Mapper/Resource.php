<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 18:08:24
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 18:09:08
 */

namespace ApiRoutes\Mapper;

use Doctrine\Common\Persistence\ObjectManager;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Zend\Hydrator\ClassMethods;

class Resource implements \ApiBase\Mapper\MapperJsonInterface
{
    private $id;
    private $name;
    private $status;
    private $isRoute;

    private $objectManager;
    private $hydrator;
    private $doctrineHydrator;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager    = $objectManager;
        $this->hydrator         = new ClassMethods(true);
        $this->doctrineHydrator = new DoctrineHydrator($objectManager);
    }

    public function hydrate(object $data) : self
    {
        $this->hydrator->hydrate($this->doctrineHydrator->extract($data), $this);

        return $this;
    }

    public function extract() : array
    {
        return $this->hydrator->extract($this);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsRoute()
    {
        return $this->isRoute;
    }

    /**
     * @param mixed $isRoute
     *
     * @return self
     */
    public function setIsRoute($isRoute)
    {
        $this->isRoute = $isRoute;

        return $this;
    }
}
