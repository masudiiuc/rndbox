<?php

namespace RndBox\Bundle\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\PostBundle\Entity\UserProfiles
 *
 * @ORM\Table(name="user_profiles")
 * @ORM\Entity
 */
class UserProfiles
{
    /**
     * @var integer $userProfileId
     *
     * @ORM\Column(name="user_profile_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userProfileId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

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