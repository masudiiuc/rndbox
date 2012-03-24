<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'user_profiles',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'userProfileId',
   'columnName' => 'user_profile_id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'userId',
   'columnName' => 'user_id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'firstName',
   'columnName' => 'first_name',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'lastName',
   'columnName' => 'last_name',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'createdDate',
   'columnName' => 'created_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'modifiedDate',
   'columnName' => 'modified_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);