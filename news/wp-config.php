<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '786070_afusawp');

/** MySQL database username */
define('DB_USER', '786070_usrafusa');

/** MySQL database password */
define('DB_PASSWORD', 'jb$9$O6Pz^#m3e3et');

/** MySQL hostname */
define('DB_HOST', 'mysql51-127.wc1.ord1.stabletransit.com');

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
define('AUTH_KEY',         'ZY3v-/5P:U!PKFWZgy>q5SiRu8GN}|ximS;xdwn%K|dZbNcw--,a?L|-z`QT+D60');
define('SECURE_AUTH_KEY',  's oS2|{/oXA{Q`8Tl6G+T^lQD#h2:?&4Nz+(rCr6mWJako{*)bVWYl03mw}J1H-m');
define('LOGGED_IN_KEY',    'u_3KBk3#emF!Y5)c%[>{D|(=_CmwH-*PKg:0m1sqPvhc4VA>F|RbfOwLS1KhD7q5');
define('NONCE_KEY',        '^|8M0:0>NFUEWWfx AEcgsswzTAr^;_KGAOj4?]$5eRq/X|6u({zf&XP`|XFlH#;');
define('AUTH_SALT',        ':s=6v-sScP9+`^/!i)Z6q8~~mM-MD2^rn-QG:i`MLhK-ksp,y%,6-gm|v-gg?+Mn');
define('SECURE_AUTH_SALT', '5 1y:[5?D,o+jJ]B0R$J]7Gn NZU?3WEv}[h)xIeX[Zmv^~ex -YM@v|k]IYhSAb');
define('LOGGED_IN_SALT',   '?4p>5taek)#:OZ%_]37|8tcN~hR{i3W@r+Q !CjAauEvD`K{)cM-rVA P#2x5~BU');
define('NONCE_SALT',       'w#j)danq$&zGK]KfdW|*zXaxT+sRV4UK/<zN>|+1fBC #Q0d3Mo@<p$`Pz)|;e/-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'afusa_';

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
