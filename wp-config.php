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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lif' );

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
define( 'AUTH_KEY',         'Q}6j<y2rq^ zUO`qJM=eAG)M4F!,1{Qz0CEY9ADz#S0.=25`J7fQxaqY7Ns?5g.)' );
define( 'SECURE_AUTH_KEY',  'g&7$fAnW:Nfm-5&)[&)b3n!A1LnM~1468GBrd iYcLWS{;tvsM@A1-gi(:q^6|>V' );
define( 'LOGGED_IN_KEY',    'y;*cK[;5WZj@TkT0hoZ~K%~t3k# B_u`&X}FmWseLq)P10JEn9eSu`}E8muWe#0u' );
define( 'NONCE_KEY',        '$_hJNKqpj5(-n#|,UALPSy3rKuh</oGQO5cb+<Fa,Xf|)hW>I67h~Fr`18}` -X+' );
define( 'AUTH_SALT',        'UDt:pbhPcCF$CY.}Z|; F=#gGsK:qL<36:685[b}x^V9s0`pm{ZZk3%]*}K2g#qr' );
define( 'SECURE_AUTH_SALT', 'e(H@$&JF{4xZ!yjQ,#H5K-KVF}6c|_0axU0jSD1^{Jj*iWMlAizuN?N^_$py.7A+' );
define( 'LOGGED_IN_SALT',   '-k.`J~j&kz1B7(,FL~q6}uGk*#7QLW/zf5b{3~*[~ Vre5:0kQP_m@>.wgS{8J#@' );
define( 'NONCE_SALT',       'J^w]9yYg2!SIq]>`wH7nCRe1;^1OH}^_AiwV$<T`$l88zLY/8upFAFXf5~^1-B~T' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
define('FS_METHOD','direct');

