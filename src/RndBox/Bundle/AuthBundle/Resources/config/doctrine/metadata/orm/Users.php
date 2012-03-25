<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'users',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'userId',
   'columnName' => 'user_id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'emailAddress',
   'columnName' => 'email_address',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'password',
   'columnName' => 'password',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'userType',
   'columnName' => 'user_type',
   'type' => 'string',
   'length' => 100,
   'fixed' => false,
   'nullable' => false,
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