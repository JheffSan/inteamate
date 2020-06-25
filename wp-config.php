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
define( 'DB_NAME', 'inteamate' );

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
define( 'AUTH_KEY',         '`BP0+`;/5+[;*ko&Qy&2GtZ]c519JbJ/<Q#7GA8%BF6L%*7Bz}>~,xu{C%_b!m[-' );
define( 'SECURE_AUTH_KEY',  'KM1]#,[KMLDYuItYyYXA : >5zdk>jFd|NK-Ldm)hl$B>qCoXpQ(ze34>SP[B$0d' );
define( 'LOGGED_IN_KEY',    'pAVV+i>a8m -oWQ-h_D_=0ki|/z7t|w6{|AI5TTAs@2e>>?]pLX0CUWBCQVW~37W' );
define( 'NONCE_KEY',        '<sMMA:}}&90}&,hjkQ88=jtlp3M=]vY8xNzN[#BnLp8m9@d=T[|gI8THSBd X>!t' );
define( 'AUTH_SALT',        '!O<LzL3*n9Lad15z3t)!4(|zgs5mGx[<&5e=a=D_|5hIfe.}J$54kP_a87xPk3^J' );
define( 'SECURE_AUTH_SALT', '`sn.hN]?buv$F64eFSV/XC7ude:8d>M82|NU)fPSlI$h-?-d]=+5$B&x9iXG`HMV' );
define( 'LOGGED_IN_SALT',   '0F:!&[y{2F,z-!^W@kuQBH95hTBt3^tHv]j#nwWZ&5y>TMF2+kK.:|6a5s_{o|Sd' );
define( 'NONCE_SALT',       'FA9TeBOv,-Q*N~d8m+q;R(LGAPlt`XY0cIXw:K`CC,(YfivW(Vd*}8>;n!7jTVxI' );

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
