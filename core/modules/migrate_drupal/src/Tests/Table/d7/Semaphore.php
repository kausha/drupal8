<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d7\Semaphore.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d7;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the semaphore table.
 */
class Semaphore extends DrupalDumpBase {

  public function load() {
    $this->createTable("semaphore", array(
      'primary key' => array(
        'name',
      ),
      'fields' => array(
        'name' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '255',
          'default' => '',
        ),
        'value' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '255',
          'default' => '',
        ),
        'expire' => array(
          'type' => 'numeric',
          'not null' => TRUE,
          'precision' => '10',
          'scale' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("semaphore")->fields(array(
      'name',
      'value',
      'expire',
    ))
    ->execute();
  }

}
#d0b2a55e7780f49f970dd2b3e73cafe0
