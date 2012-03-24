<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'ideas',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'ideaId',
   'columnName' => 'idea_id',
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
   'fieldName' => 'title',
   'columnName' => 'title',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'slug',
   'columnName' => 'slug',
   'type' => 'string',
   'length' => 255,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'description',
   'columnName' => 'description',
   'type' => 'text',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'status',
   'columnName' => 'status',
   'type' => 'string',
   'length' => 25,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'modifiedDate',
   'columnName' => 'modified_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);