<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string $emailAddress
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string $userType
     *
     * @ORM\Column(name="user_type", type="string", length=100, nullable=false)
     */
    private $userType;

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