<?php

namespace Drupal\custom_language_switcher\Controller;
use Drupal\Core\Controller\ControllerBase;

class CustomLanguageSwitcherController extends ControllerBase {

  public function display(): array {
    $text_to_display = 'This is new content.';
    
    $current_url = \Drupal::request()->getRequestUri();
    $current_language = (strpos($current_url, '/cy/') !== false) ? 'Welsh' : 'English';

    return [
      '#theme' => 'custom_language_switcher_output',
      '#text_to_display' => $this->t($text_to_display),
      '#current_language' => $current_language,
    ];
  }
}
