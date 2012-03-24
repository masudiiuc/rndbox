<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;

class RegistrationForm
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $password;
    protected $confirm_password;

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

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

    public function setConfirmPassword($confirmPassword)
    {
        $this->confirm_password = $confirmPassword;
    }

    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }

    public static function loadValidatorMetadata( ClassMetadata $metadata ){
        $metadata->addPropertyConstraint('first_name',  new NotBlank());
        $metadata->addPropertyConstraint('last_name',   new NotBlank());
        $metadata->addPropertyConstraint('email',       new NotBlank());
        $metadata->addPropertyConstraint('email',       new Email());
        $metadata->addPropertyConstraint('password',    new NotBlank());
    }
}