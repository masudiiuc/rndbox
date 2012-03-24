<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\IdeaComments
 *
 * @ORM\Table(name="idea_comments")
 * @ORM\Entity
 */
class IdeaComments
{
    /**
     * @var integer $ideaCommentId
     *
     * @ORM\Column(name="idea_comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideaCommentId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var text $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var string $likeIt
     *
     * @ORM\Column(name="like_it", type="string", length=25, nullable=true)
     */
    private $likeIt;

    /**
     * @var string $wantToWork
     *
     * @ORM\Column(name="want_to_work", type="string", length=25, nullable=true)
     */
    private $wantToWork;

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


}