<?php
/**
 * Clean Menu Walker.
 *
 * @category    WordPress
 * @package     CleanMenuWalker
 * @author      Christopher Davis <http://christopherdavis.me>
 * @copyright   2012 Christopher Davis
 * @license     http://opensource.org/licenses/MIT MIT
 */

!defined('ABSPATH') && exit;

/**
 * Hooked into `wp_nav_menu_args`. Sets the walker to an instance of
 * CleanMenuWalker
 *
 * @since   0.1
 * @param   array $args
 * @return  array
 */
function cmw_set_walker($args) {
    if (!is_admin() && empty($args['walker'])) {
        $args['walker'] = new CleanMenuWalker();
    }

    return $args;
}
