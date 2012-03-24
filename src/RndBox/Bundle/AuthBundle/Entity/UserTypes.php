<?php

namespace RndBox\Bundle\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RndBox\Bundle\AuthBundle\Entity\UserTypes
 *
 * @ORM\Table(name="user_types")
 * @ORM\Entity
 */
class UserTypes
{
    /**
     * @var integer $userTypeId
     *
     * @ORM\Column(name="user_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userTypeId;

    /**
     * @var string $userType
     *
     * @ORM\Column(name="user_type", type="string", length=100, nullable=false)
     */
    private $userType;


}