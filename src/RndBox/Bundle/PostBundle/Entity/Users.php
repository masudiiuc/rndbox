<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\PostBundle\Entity\Users
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
     * @ORM\oneToMany(targetEntity="Ideas", mappedBy="Users")
     * @ORM\joinColumn(name="id", referencedColumnName="user_id")
     */
    private $userId;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string $usernameCanonical
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $emailCanonical
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var datetime $lastLogin
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean $locked
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean $expired
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var datetime $expiresAt
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string $confirmationToken
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var datetime $passwordRequestedAt
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array $roles
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var boolean $credentialsExpired
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var datetime $credentialsExpireAt
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;


}