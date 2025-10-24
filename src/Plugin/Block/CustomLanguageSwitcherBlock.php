<?php

namespace Drupal\custom_language_switcher\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a Custom Language Switcher block.
 *
 * @Block(
 *   id = "custom_language_switcher_block",
 *   admin_label = @Translation("Custom LanguageSwitcher Block")
 * )
 */
class CustomLanguageSwitcherBlock extends BlockBase {
  public function build() {
    $current_url = \Drupal::request()->getRequestUri();

    $mylanguage = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $current_language = $mylanguage;

    /**$current_language = (strpos($current_url, '/cy/') !== false) ? 'Welsh' : 'English';**/
    $text_to_display = $current_url;

    return [
      '#theme' => 'custom_language_switcher_output',
      '#text_to_display' => $this->t($current_language),
    ];
  }
}