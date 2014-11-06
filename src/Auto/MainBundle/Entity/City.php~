<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class City
{
    protected $name;
    protected $region_id;
    protected $is_center;


    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set region_id
     *
     * @param integer $regionId
     * @return City
     */
    public function setRegionId($regionId)
    {
        $this->region_id = $regionId;

        return $this;
    }

    /**
     * Get region_id
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    public function __toString()
    {
        return $this->name;
    }


    /**
     * Set is_center
     *
     * @param boolean $isCenter
     * @return City
     */
    public function setIsCenter($isCenter)
    {
        $this->is_center = $isCenter;

        return $this;
    }

    /**
     * Get is_center
     *
     * @return boolean 
     */
    public function getIsCenter()
    {
        return $this->is_center;
    }
}
