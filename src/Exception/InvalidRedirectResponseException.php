<?php
/**
 * @file
 * Contains \Drupal\rabbit_hole\Exception\InvalidRedirectResponseException.
 */

namespace Drupal\rabbit_hole\Exception;

/**
 * TODO.
 */
class InvalidRedirectResponseException extends \Exception {

  /**
   * TODO.
   */
  public function __construct($message = NULL, $code = 0, Exception $previous = NULL) {
    parent::__construct($message, $code, $previous);
  }

}
