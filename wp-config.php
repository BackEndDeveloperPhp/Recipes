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
define( 'DB_NAME', 'recipes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'LX9&{6v,S@]h>Q$({fsny&ulAQJK2@xn i@UmuPM5ClPRAIh-{(|HBMwN)qmmZP#' );
define( 'SECURE_AUTH_KEY',  '^|Qa}D]FIZ.G^Hwn;c4J9Cpd]~<dtl|#1UMAZaIg29_c@6ew`9U^hQb#L]k?;G}#' );
define( 'LOGGED_IN_KEY',    'b<Dir#wRiiByN%lH/l9?V=`rCazSz1seVEw g!Xz[Zdh|sX&i:hKukzBhZmeVIGO' );
define( 'NONCE_KEY',        '@aP`)KEd[:Kf3NZOl1M8aEj1EaME,0yz!Xdte@lJ]X4Z?YYX=6)<<cyl7Ok?sg#=' );
define( 'AUTH_SALT',        '`DpcNbwpAU9Of%0MzZiam@Y4j#->z)LVYlaz7J5VF3ol]Md`}kyg&*28fVu,FyP}' );
define( 'SECURE_AUTH_SALT', 'YlJ}0jIYEn52_W^[[FQ9V}r%#Rhsrk3MvP;ye.>hKCWA5lRq07kgN>G5u(L8;Z^u' );
define( 'LOGGED_IN_SALT',   '1HNai~*y18r?pBJt!xYh,c5>!WP|F{mA_zkViW06Ij4E?nsJ7PtdGD,S20$LSh7%' );
define( 'NONCE_SALT',       'o4ijI^OrEKGE|/3ttVL3[4;(sY<@{N.*E$U?QQl?18V3WOz?r~>2qwPIzmf4W*gu' );

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
