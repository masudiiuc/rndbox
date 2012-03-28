<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\Vote
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity
 */
class Vote
{
    /**
     * @var integer $voteId
     *
     * @ORM\Column(name="vote_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voteId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer $vote
     *
     * @ORM\Column(name="vote", type="integer", nullable=true)
     */
    private $vote;
}