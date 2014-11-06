<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Comment
{
    protected $id_auto;
    protected $name;
    protected $email;
    protected $text;
    protected $date_add;
    protected $public;
    protected $parent_id;

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
     * Set id_auto
     *
     * @param \integer $idAuto
     * @return Comment
     */
    public function setIdAuto($idAuto)
    {
        $this->id_auto = $idAuto;

        return $this;
    }

    /**
     * Get id_auto
     *
     * @return \integer
     */
    public function getIdAuto()
    {
        return $this->id_auto;
    }

    /**
     * Set name
     *
     * @param \string; $name
     * @return Comment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return \string; 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param \string; $email
     * @return Comment
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \string; 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date_add
     *
     * @param \DateTime $dateAdd
     * @return Comment
     */
    public function setDateAdd($dateAdd)
    {
        $this->date_add = $dateAdd;

        return $this;
    }

    /**
     * Get date_add
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->date_add;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return Comment
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set parent_id
     *
     * @param integer $parentId
     * @return Comment
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }
}
