<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Model
{
    protected $mark_id;
    protected $model;
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
     * Set mark_id
     *
     * @param integer $markId
     * @return Model
     */
    public function setMarkId($markId)
    {
        $this->mark_id = $markId;

        return $this;
    }

    /**
     * Get mark_id
     *
     * @return integer 
     */
    public function getMarkId()
    {
        return $this->mark_id;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Model
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    public function __toString()
    {
        return $this->model;
    }

}
