<?php

namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
*/
class Document
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
public $id;

/**
* @ORM\Column(type="string", length=255)
* @Assert\NotBlank
*/
public $name;

/**
* @ORM\Column(type="string", length=255, nullable=true)
*/
public $path;

public function getAbsolutePath()
{
return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
}

public function getWebPath()
{
return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
}

protected function getUploadRootDir()
{
// абсолютный путь к каталогу, куда будут сохраняться загруженные документы
return __DIR__.'/../../../../web/'.$this->getUploadDir();
}

protected function getUploadDir()
{
//избавьтесь от __ DIR __, так чтобы его не было, когда отображался загруженный документ/изображение
return 'uploads/documents';
}
}