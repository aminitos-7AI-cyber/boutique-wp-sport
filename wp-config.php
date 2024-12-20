<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lYFPpY$wj6`RMiyQn~Odj6*+~R:^*%M>B6V]]feY;hd390?%BB9^i]QV<$#9Ro0m' );
define( 'SECURE_AUTH_KEY',  'NAwX6?0Sp:*l_*kBZ%>y1cD&e a:7$  eaA>7Rg7-LBwp|`o|dEoS7DXFm&4{I9L' );
define( 'LOGGED_IN_KEY',    'JvhT1oZcZlk9iH-:>^rl?zxew Z9/W?KKJT&v%p*t6Vi#dyj$$jI$.]X|>jIL%.:' );
define( 'NONCE_KEY',        'G0zEd,-LT;hEVWT#;lQ:APqYQ[PU1Hcd!wc l(uY;kN0]j?pveK.Pa&J5e-V:p^]' );
define( 'AUTH_SALT',        'bnfw4.UWzR#$hAsEReON9lzW=mcNS91}`wRb>^9K;&A?x=Z2APy;mR}<G,UG^z?m' );
define( 'SECURE_AUTH_SALT', 'VbxTMT+%0>](~|VQ(%PE0ER~@3t:Ofm>sYI+b7Oud|y{v@f:s%:fXy!6,3Vb97)d' );
define( 'LOGGED_IN_SALT',   '_E2!0B%Hbl~5Z53P6_v66!L<kEe@Ca>v>_0wBky4R=nN1W!nY(Hh|y)qR7 CqHXo' );
define( 'NONCE_SALT',       'Fz|TWhpD)O-$Ih+D.cygI|HtrA#IlbSUVj);2.)>qIitP7hqfg`THJM&QUw9SL&<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
