<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class User extends BaseUser
{
    protected $password2;

    /**
     * Set password2
     *
     * @param string $password2
     * @return User
     */
    public function setPassword2($password2)
    {
        $this->password2 = $password2;

        return $this;
    }

    /**
     * Get password2
     *
     * @return string
     */
    public function getPassword2()
    {
        return $this->password2;
    }
}
