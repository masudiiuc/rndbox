<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\Ideas
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
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
     * @var datetime $modifiedDate
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    private $modifiedDate;
	
	
	public function setIdeaId($IdeaId)
    {
        $this->ideaId = $IdeaId;
    }

    public function getIdeaId()
    {
        return $this->ideaId;
    }
	public function setUserId($UserId)
    {
        $this->ideaId = $UserId;
    }

    public function getUserId()
    {
        return $this->userId;
    }
	
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


	public function setStatus($Status)
    {
        $this->status = $Status;
    }

    public function getStatus()
    {
        return $this->status;
    }
	
	public function setModifiedDate($ModifiedDate)
    {
        $this->modifiedDate = $ModifiedDate;
    }

    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }
	
}