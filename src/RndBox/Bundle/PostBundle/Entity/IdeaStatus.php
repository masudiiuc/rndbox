<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\PostBundle\Entity\IdeaStatus
 *
 * @ORM\Table(name="idea_status")
 * @ORM\Entity
 */
class IdeaStatus
{
    /**
     * @var integer $ideaStatusId
     *
     * @ORM\Column(name="idea_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideaStatusId;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;


}