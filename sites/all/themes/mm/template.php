<?php
// $Id: template.php,v 1.1 2010/12/15 06:17:39 geerlingguy Exp $

/**
 * Theme functions for MM Theme.
 */

/**
 * Implementation of theme_preprocess_html().
 */
function mm_preprocess_html(&$vars) {
  // Add CSS files for Internet Explorer-specific styles.
  drupal_add_css(path_to_theme() . '/css/ielt9.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ielt8.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
}