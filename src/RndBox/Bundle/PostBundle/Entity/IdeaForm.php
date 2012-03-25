<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

class IdeaForm
{
    protected $title;
    protected $slug;
    protected $description;
    
    public function setTitle($Title)
    {
        $this->title = $Title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setSlug($Slug)
    {
        $this->slug = $Slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setDescription($Description)
    {
        $this->description = $Description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public static function loadValidatorMetadata( ClassMetadata $metadata ){
        $metadata->addPropertyConstraint('title',  new NotBlank());
        $metadata->addPropertyConstraint('slug',   new NotBlank());
        $metadata->addPropertyConstraint('description',new NotBlank());
        
    }
}