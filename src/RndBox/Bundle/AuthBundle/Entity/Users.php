<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users extends BaseUser
{
    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $userId;


}