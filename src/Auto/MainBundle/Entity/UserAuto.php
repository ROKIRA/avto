<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class UserAuto
{
    protected $id_user;
    protected $id_auto;
    protected $date;

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
     * Set id_user
     *
     * @param integer $idUser
     * @return UserAuto
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get id_user
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set id_auto
     *
     * @param integer $idAuto
     * @return UserAuto
     */
    public function setIdAuto($idAuto)
    {
        $this->id_auto = $idAuto;

        return $this;
    }

    /**
     * Get id_auto
     *
     * @return integer 
     */
    public function getIdAuto()
    {
        return $this->id_auto;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return UserAuto
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
