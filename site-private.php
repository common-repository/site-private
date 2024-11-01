<?php
/*
Plugin Name: Site Private
Description: Simplest plugin that redirects unauthorized users to login page.
Version: 1.2
Author: Gaiaz Iusipov
*/

defined('ABSPATH') or exit;

function siteprivate_redirect()
{
    global $pagenow;
    if ('wp-login.php' !== $pagenow
        && !is_user_logged_in()
        && !is_user_member_of_blog()) {
        auth_redirect();
    }
}

add_action('plugins_loaded', 'siteprivate_redirect');
