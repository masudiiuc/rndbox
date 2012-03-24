<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'idea_workers',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'ideaWorkerId',
   'columnName' => 'idea_worker_id',
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
   'fieldName' => 'startedDate',
   'columnName' => 'started_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);