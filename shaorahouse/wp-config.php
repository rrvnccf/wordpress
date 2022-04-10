<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shaorahouse' );

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
define( 'AUTH_KEY',         'C8T&?](^L@:U^ 5c/14r^  Osr:|OMlVe|Gd[ PpZLgiQ8:XzeF~8dqr-0AV2dUp' );
define( 'SECURE_AUTH_KEY',  'jnxHmO_[RHj5}]Vl`$O`]P=YW9rrDHs?IhPGCXD0OUvyQ_<e[^Q.D?T5P0t;MSRf' );
define( 'LOGGED_IN_KEY',    '@{0,1HBlJo+(VDtpc5TFc+&)6%h<(rzY(W3#>|$wBVoAoki!OJpQ<k{d,AXVW63>' );
define( 'NONCE_KEY',        '`.5@$Lb]H}~?;Xk4i)JUi=?zB&s&8EE6ErWm*&fZJ{+BM.xF]H_!;wBFTf4DL=qX' );
define( 'AUTH_SALT',        'rCxK-Cq dMb]TRAKE]8VUd 8-{v:@7xO*W^m2&Q[j:L*Qu`hgW=4:zM)$_m3w14?' );
define( 'SECURE_AUTH_SALT', 'z4WKyCPAv4,VA,u5!F_,cwA|BNUwavto(@F7tFM)O<q#8yl#9ONe6/?tZd<f[*(J' );
define( 'LOGGED_IN_SALT',   ':O>oRsQN#;H4f5hkURS*sQJlVKwU+B%UUhN,Jv7:8E|ogW|W)+`)tHBJNQ-t]Fn;' );
define( 'NONCE_SALT',       'g*5>wj,]VF(`Q9r~sn&L04,QFei`>VIz|1;D$k|r>F`z-(WB8]NT`gPtMV1QL&xj' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
