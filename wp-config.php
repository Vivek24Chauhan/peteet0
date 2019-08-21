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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'peteet' );

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
define( 'AUTH_KEY',         'ac,~ktx2K<:5p}k|,)(yo|Z|:F?EaJcJ+4WlLi179s$3Qu1-mPPu ?whHDGEW6cA' );
define( 'SECURE_AUTH_KEY',  'Nf}17x@3TwY-QQ{-Ejg<o`JKYp$lzv py9Crb,+&=@BC^CElj(69(;ER(=uU0yb@' );
define( 'LOGGED_IN_KEY',    '2c2_:/lj)Fy8[sf%E:D<(D!L>h?t%+dc(V34/iUn9~iUDPh6!H}Q.dke.EK@/{jn' );
define( 'NONCE_KEY',        '#/M+?!XC=)p70S~k@,5/i?;vR#d%{nQ+xIfuX:8qI.P[GWr(LwbH<_SPGjK+rLkM' );
define( 'AUTH_SALT',        '~$9!7Zr=W?owo6alUJVFq!U>RjFs{CD:F%p RX;pzMSzVUpmD^ie#YvH#VVx[5NB' );
define( 'SECURE_AUTH_SALT', 'sa?bu4Dpw-6y@~Sd=IZ`tG=@ym@%XpCSaz 2mnwRa5 5Idu0B+rwev,[_qAB]M1#' );
define( 'LOGGED_IN_SALT',   '(}~fPguf9JWC@s}D2dGaAQjP`lZ^IF^^a#m[r4PhdypsaR/$RkOt1, ma@up_,v$' );
define( 'NONCE_SALT',       '])6^AJ<V37On52|[|(Xkn$( >s%0k|u4-d:NEdLN0T:a9R0 J+EkU-d@x+Gn&:Cq' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
