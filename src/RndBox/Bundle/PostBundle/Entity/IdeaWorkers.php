<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\PostBundle\Entity\IdeaWorkers
 *
 * @ORM\Table(name="idea_workers")
 * @ORM\Entity
 */
class IdeaWorkers
{
    /**
     * @var integer $ideaWorkerId
     *
     * @ORM\Column(name="idea_worker_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideaWorkerId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var datetime $startedDate
     *
     * @ORM\Column(name="started_date", type="datetime", nullable=true)
     */
    private $startedDate;


}