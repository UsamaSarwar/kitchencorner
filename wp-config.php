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
define( 'DB_NAME', 'kitchencorner' );

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
define( 'AUTH_KEY',         '@_b.g>#@u:=T8G/,)wO;Hff*6D:}{E?kj}mL7&h0X2x)7dN,7LfC,QQZnLkUdBx*' );
define( 'SECURE_AUTH_KEY',  'FrBq?Ig#e+u4?}l:+fK]f&X$|N%%VMv6U2B|9~lRq9z)dbZ0^Y6-`(kEC5 I.7Yj' );
define( 'LOGGED_IN_KEY',    'vKMv3T|Pf(eJ.J9iHo~eTq1wQ$Y&f/(h^=9_v/a9$m}^7-ysU.2~AO<?=Lfjc7:+' );
define( 'NONCE_KEY',        'XaRI8T3:T_%!v.)a~GbGtbf@[=IlIUJ5Q Ne8ycu-X? %F.55jNWA8pH,F/y3R4(' );
define( 'AUTH_SALT',        'Gr|xDp#cU-uDi]Y[$]jR1nF1-=c@ EJj9D.ZPMMl_861AC#n@<f9u$4~JA*eEiF.' );
define( 'SECURE_AUTH_SALT', ';6}ZQRh4Wn!&TC8df59W<DxmJgKe0_:PC/RcjqDz<+G/,B>iCg=++c8]d{4g1]M9' );
define( 'LOGGED_IN_SALT',   'D.[yXZYz.HEy16`KKLcSoIc$}`Ea]wV2Lq6]STl$.y*@%EL Ok<oEvioj0_16pr0' );
define( 'NONCE_SALT',       'Z#xD6!O+|`M41^fDC,uuZk[C>^DL>21M;4Ple#pU*P&$SlG{?ey,?1#6xH[p`vrK' );

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
