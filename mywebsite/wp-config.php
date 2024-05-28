<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u154549977_JvZla' );

/** Database username */
define( 'DB_USER', 'u154549977_AA4J0' );

/** Database password */
define( 'DB_PASSWORD', 'ugXmnX1DF5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%36_7d&c1biVl+Nn=rgFxgklLYR(:Fi9^bVQf?/3)k#v>dCb`a}s;.%=*@_%Ku_:' );
define( 'SECURE_AUTH_KEY',   'iQEC&7y]3d4 w^fqrMI78=.&2g<s.Kh2;/$Zj8}C*)v|H1)(K2-w^2Oew-lGARs?' );
define( 'LOGGED_IN_KEY',     '3r,6J-]xgScHt.X#$MWP9ruM)8oJfh7.DMaVu~?#N$=Z6D0oNd4ca%{{jNf^)nHq' );
define( 'NONCE_KEY',         '_TwriVbfG52$B2IT4#vJqA8R;#,%SM!Lm-UnH?_qk8=TW3i/HgyHX*HGVI+Be)em' );
define( 'AUTH_SALT',         'Fk ;r E|CnE?Dy!8jUZow7.%:<n&G%CrY6(%T->pD*wxoQ:v]k6N~[=/;q,*.YKa' );
define( 'SECURE_AUTH_SALT',  'vvtc-=R#}4/WvO`ikx/yq^,EmBcPN}ipfx&hKp&%Op)!9Vcxm_1595T=y}FJ3V<9' );
define( 'LOGGED_IN_SALT',    '^odv@j `s%u#`yww?Pu&0IAu0.Ok6XDB2fG&Bq2AT)o3N=_9rk!y:l;Hao5kiE@p' );
define( 'NONCE_SALT',        'SjI):0?G6ZWulrh/c-PiBhN,lMTD](Bo2e`2clSML)}8v=T+kRF@j9^-{$C8[[Ye' );
define( 'WP_CACHE_KEY_SALT', 'h-(SPh8FD75Fn%N|:BRq QI/|A+|qX3ZZfY6T8@akCEAYe%qZpN{YPZPT2yIHl^<' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
