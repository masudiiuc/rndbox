<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\MinLength;

class LoginForm
{
    protected $email;
    protected $password;


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata){
        $metadata->addPropertyConstraint('email',   new NotBlank());
        $metadata->addPropertyConstraint('email',   new Email());
        $metadata->addPropertyConstraint('password',new NotBlank());
        $metadata->addPropertyConstraint('password',new MinLength(6));
    }

}