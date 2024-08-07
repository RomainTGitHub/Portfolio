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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          '{!%;{]4[7]bl$rMF4NUM8UK&X20Xs8S@10JRIqkKrle}+ODzL<-wPnih|F#4RD*P');
define('SECURE_AUTH_KEY',   '<|EG?/~pra~]$~dI1-/1I>>ysb|Yjymc/YKRwMu$],4AH;q`AIn?[wvd[4f2Yluy');
define('LOGGED_IN_KEY',     '@<s_eA3!SonD?lD6]-mAU7xg>a)3v(3u!}d|S,(]0$Km{a+bZmUL/$mQ|WY2?`q(');
define('NONCE_KEY',         'J(Lm)dscyMNqgo&#65pDb8EHK`a#ytn;5X>jSEFtMX|k6-6sk`JjLN!4BHFSmi6M');
define('AUTH_SALT',         'L%wl3a<}^l1PvKYGW~mP)H[w]SO[I|*}E1F${TMfi3a@ibKcW?j0_vSBf*K$ +11');
define('SECURE_AUTH_SALT',  'h/S6V+wT/PoE{x$zArcG2~24&r8MP1>0)n IqVub)Cj~MujD7#83yX-gUbObdA/8');
define('LOGGED_IN_SALT',    '.#y;o#uRYG M,waRK<@W k>mq*Uf=-:#g(IB-8p&3n8bG:LUkqwAu,}C)/j.15>v');
define('NONCE_SALT',        'zKV]THOZ.U(dr3`&aDn dbpR6%U?dN<SWy^5T`%*L_ZQ}vRSh{fSrB{@AtV[{nM8');
define('WP_CACHE_KEY_SALT', 'b4-Nzs8n;qNcv<)/Ke-ApwzbhFM8msn!V-0=BZbA`0=j&#+89Cq5m9n!1C3Jv:I3');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
