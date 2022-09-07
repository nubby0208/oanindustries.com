<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '4373352fd3c173dfc60680357cd68906f05a826ba60d573d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{QuB.HALv.#Qvbakz9/9Vf5a^<`>h=v:YBL;Ax&`q#G< i{/Zjdib^WfrwP..46h' );
define( 'SECURE_AUTH_KEY',  '!IJVg+-Pn7Ai:ERsgZL-Az[V^xr^EoA1ZBA~3gHBioM.)3Wt/2#9qN16T6s=mqG,' );
define( 'LOGGED_IN_KEY',    '(7<${DVf_qPoRqMu;8p>&s$:scTS%C,>,c9H//&;Nwyj_lJ7Jw4/sb9DyT5+(LMh' );
define( 'NONCE_KEY',        '|8?4tKCVxcq#3 )o=Sa#Yy>.23Mru]]$C3?c!8f=-M[s%]j?h*bC=|?9LJM<KU25' );
define( 'AUTH_SALT',        'aUjaRQfxH/a&vQeEMwC,[~#i!ZZcTi~6K1S93&{3/PsYn.nQ6 th(|l/?4gf04A/' );
define( 'SECURE_AUTH_SALT', 'S7;]lET*@E`DjT,xj0M`/# C=ddkV[x6O^`?T%/@8[&k_FsXjC!.i;I&v~uQI^AA' );
define( 'LOGGED_IN_SALT',   'VsG<i`-ZT.ahwXic3d~14Y3QlRt!j6G)`M/TEW_=:55J;!B>6%d!egeWHX}N%H91' );
define( 'NONCE_SALT',       'AUSU(FkTosDbWM6Sx@^o_D-< %iNd{rEt`>&lLnvztiz {mR%J+6)rm/~WC6.SII' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
