<?php

/**
 * @file
 * Contains \Drupal\Core\Config\FileStorageFactory.
 */

namespace Drupal\Core\Config;

/**
 * Provides a factory for creating config file storage objects.
 */
class FileStorageFactory {

  /**
   * Returns a FileStorage object working with the active config directory.
   *
   * @return \Drupal\Core\Config\FileStorage FileStorage
   */
  static function getActive() {
    return new FileStorage(config_get_config_directory(CONFIG_ACTIVE_DIRECTORY));
  }

  /**
   * Returns a FileStorage object working with the staging config directory.
   *
   * @return \Drupal\Core\Config\FileStorage FileStorage
   */
  static function getStaging() {
    return new FileStorage(config_get_config_directory(CONFIG_STAGING_DIRECTORY));
  }

}
