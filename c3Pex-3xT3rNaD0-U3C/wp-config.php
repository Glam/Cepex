<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cep1321112561869');

/** MySQL database username */
define('DB_USER', 'cep1321112561869');

/** MySQL database password */
define('DB_PASSWORD', 'h5B@qqtLlZ');

/** MySQL hostname */
define('DB_HOST', 'cep1321112561869.db.9507321.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        '([h7~i;2]4f+g40RQ{~gB+!En727>|qE{h-a$F|l 4+U;1 M|*g.<x(u[)l;g@U{');
define('SECURE_AUTH_KEY', 'cm{O7a/$3Qp&B@ b9:E ~LP6[A++d06+d;gCP$dbRJbjY1/5#!YK(;g-EO6S~sr=');
define('LOGGED_IN_KEY',   'jC9K#7{D{NFum;]]Sp[RnO<4|[~;BSr+YJHzo(Fmcvk Z_6tq5H>v?tP8yH$mPWm');
define('NONCE_KEY',       '@O}<`vly/.qT0S`o 6%3>h~0SO->sJ&I70d=hHKogovk}`z|]GT^JoZj <5dDZ|i');
define('AUTH_SALT',        '_If_OcdHEpNMX(%G8UFX');
define('SECURE_AUTH_SALT', 'hLG@(8Qn$hV*c/YKM  3');
define('LOGGED_IN_SALT',   'qU42WqmV(6rFS0TS)m6a');
define('NONCE_SALT',       'S2DKUKb7$Wx_x(N$v&N=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
    define ('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
