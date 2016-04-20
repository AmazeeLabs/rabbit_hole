<?php
/**
 * @file
 * Contains \Drupal\rabbit_hole\Exception\InvalidBehaviorSettingException.
 */

namespace Drupal\rabbit_hole\Exception;

/**
 * TODO.
 */
class InvalidBehaviorSettingException extends \Exception {

  private $setting;

  /**
   * TODO.
   */
  public function __construct($setting) {
    parent::__construct();
    $this->setting = $setting;
  }

  /**
   * TODO.
   */
  public function getSetting() {
    return $this->setting();
  }

}
