<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\PostBundle\Entity\Ideas
 *
 * @ORM\Table(name="ideas")
 * @ORM\Entity
 */
class Ideas
{
    /**
     * @var integer $ideaId
     *
     * @ORM\Column(name="idea_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideaId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="Ideas")
     * @ORM\joinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var datetime $modifiedDate
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    private $modifiedDate;


    /**
     * @param \RndBox\Bundle\PostBundle\Entity\datetime $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return \RndBox\Bundle\PostBundle\Entity\datetime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \RndBox\Bundle\PostBundle\Entity\text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \RndBox\Bundle\PostBundle\Entity\text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $ideaId
     */
    public function setIdeaId($ideaId)
    {
        $this->ideaId = $ideaId;
    }

    /**
     * @return int
     */
    public function getIdeaId()
    {
        return $this->ideaId;
    }

    /**
     * @param \RndBox\Bundle\PostBundle\Entity\datetime $modifiedDate
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return \RndBox\Bundle\PostBundle\Entity\datetime
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}