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
define( 'DB_NAME', 'urbanladder' );

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
define( 'AUTH_KEY',         'cE=_Jm6$ru2_g6 .>RO{a=II?/S;y{o*Jz*i5],9iZsxk)*~AGFFM#kj{-o(g]}g' );
define( 'SECURE_AUTH_KEY',  '}>Ikvw8G-I,PHO5&m0boxud]VT(#50|ZE8IBx(Wzf*]IW5,V<M^P-PU,d;//NdN$' );
define( 'LOGGED_IN_KEY',    'SH%$~[W:$0Y,K.[_HHSy=}iL#nvwWDb7mIli!W>D`/Pr/J3>rhy$2&GsZ==@gt5<' );
define( 'NONCE_KEY',        'w5{Yct@n@s zM-gbXWVcgFXX|D3gLaU*3^&+`z6U4T*Vm_^qwvxN?>YF^%cB@ZyP' );
define( 'AUTH_SALT',        'onss*z/`O[CK]g!Z%C*vXJN$`~HN~~fWbrI5{[?0Ua)[s-pfyDSMT#mI1,<yYyOZ' );
define( 'SECURE_AUTH_SALT', 'vtsH]x0`dnz:5-n@U2~&,/Y3aLG5)|q6z*Xg|_=v*:lQld.OPZ^]OMG72k:(6ZdB' );
define( 'LOGGED_IN_SALT',   '`,gGp9`-5OF?2)|K6<6U`uo8kEo)oGDDw|zFj9pLx:}N/w7lWsBEenJVJFy}rOjy' );
define( 'NONCE_SALT',       '~+Y?w&C^uwg`tGMxrGPZ`0?)K/KX{#k(]TI}jCo?89.<%44LT/BW9{{GaTj[$~ji' );

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
