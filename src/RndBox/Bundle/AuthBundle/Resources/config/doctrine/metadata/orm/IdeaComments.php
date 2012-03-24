<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'idea_comments',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'ideaCommentId',
   'columnName' => 'idea_comment_id',
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
   'fieldName' => 'comment',
   'columnName' => 'comment',
   'type' => 'text',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'likeIt',
   'columnName' => 'like_it',
   'type' => 'string',
   'length' => 25,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'wantToWork',
   'columnName' => 'want_to_work',
   'type' => 'string',
   'length' => 25,
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