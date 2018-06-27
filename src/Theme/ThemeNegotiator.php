<?php
/**
 * @file
 * Contains \Drupal\mi_modulo\Theme\ThemeNegotiator
 */
namespace Drupal\mi_modulo\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class ThemeNegotiator implements ThemeNegotiatorInterface {

  /**
   * Whether this theme negotiator should be used to set the theme.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match object.
   *
   * @return bool
   *   TRUE if this negotiator should be used or FALSE to let other negotiators
   *   decide.
   */
  public function applies(RouteMatchInterface $route_match)
  {
    $apply = false;
    $userRolesArray = \Drupal::currentUser()->getRoles();
    if( $route_match->getRouteName() != 'user.login' && in_array("externo", $userRolesArray) ) {
      $apply = true;
    }
    return $apply;
  }

  /**
   * Determine the active theme for the request.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match object.
   *
   * @return string|null
   *   The name of the theme, or NULL if other negotiators, like the configured
   *   default one, should be used instead.
   */
  public function determineActiveTheme(RouteMatchInterface $route_match)
  {
    $theme = null;
    $userRolesArray = \Drupal::currentUser()->getRoles();
    if( $route_match->getRouteName() != 'user.login' && in_array("externo", $userRolesArray) ) {
      $theme = 'intranet_externo';
    }
    return $theme;
  }

}
