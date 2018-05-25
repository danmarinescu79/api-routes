<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 17:45:05
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 17:54:05
 */

namespace ApiRoutes\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource", indexes={@ORM\Index(name="name", columns={"name"}),@ORM\Index(name="status", columns={"status"}), @ORM\Index(name="search_index", columns={"status", "name"})})
 * @ORM\Entity(repositoryClass="ApiRoutes\Repository\Resource")
 */
class Resource
{
    const STATUS = [
        0 => 'Deleted',
        1 => 'Active',
    ];
    const DELETED = 0;
    const ACTIVE  = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=130, unique=true)
     */
    private $name;

    /**
     * $var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = self::ACTIVE;

    /**
     * $var boolean
     *
     * @ORM\Column(name="is_route", type="boolean", nullable=false)
     */
    private $isRoute = true;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Resource
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return Resource
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isRoute.
     *
     * @param bool $isRoute
     *
     * @return Resource
     */
    public function setIsRoute($isRoute)
    {
        $this->isRoute = $isRoute;

        return $this;
    }

    /**
     * Get isRoute.
     *
     * @return bool
     */
    public function getIsRoute()
    {
        return $this->isRoute;
    }
}
