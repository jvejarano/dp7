<?php
/**
 * @file
 * paquete_de_imagenes.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function paquete_de_imagenes_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer image styles'.
  $permissions['administer image styles'] = array(
    'name' => 'administer image styles',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'image',
  );

  return $permissions;
}
