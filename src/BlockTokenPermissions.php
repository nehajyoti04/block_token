<?php

namespace Drupal\block_token;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity;
//use Drupal\Core\StringTranslation\StringTranslationTrait;

class BlockTokenPermissions implements ContainerInjectionInterface {

//  use StringTranslationTrait;

  public static function permissions() {
    $perms = [];


    $perms['administer block token'] = array(
        'title' => t('Administer block tokens'),
        'description' => t('Turn on/off the block token generation per block.(This gives permission to View/Edit/Save block forms.)'),
        );

    return $perms;
  }
}
