<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'idea_status',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'ideaStatusId',
   'columnName' => 'idea_status_id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'status',
   'columnName' => 'status',
   'type' => 'string',
   'length' => 25,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);