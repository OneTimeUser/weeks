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
define('DB_NAME', 'weeks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}F+b#:P+N[4U[l(WC;dB,;J+Dr6b]#J$}k/!mUdKWY+^w{*5Ufy*Z0+U0X;$5A``');
define('SECURE_AUTH_KEY',  'w(o^Z@[-DW-3P&nDY>D`7m+d/I~O#Gzzh|opD5-Xgy;T)C*v1G,w4GuC1DMgN-UE');
define('LOGGED_IN_KEY',    '.P_$nAH9rE^NMp=$Bjpa2CZO;cr_#v!u3p>C6*F?5>V<_.GUT_C`)N7)$r_)E<c2');
define('NONCE_KEY',        'IIa1$1qpT6%?sW*]~M)Y<~o0+FWjWiwr%VkB~VQ5im51H)e!ma+E{k9ko<N+Ej4x');
define('AUTH_SALT',        'DbdLHzqwT1es-cWbqI 1ZpUN)5-2_1HTk:R{bMr6^i*-->T7)Fa-8^n4ZFK|%LNY');
define('SECURE_AUTH_SALT', 'k wIZ;[6W!`E&H,p/;Q2DER$R]b[1Nu&_1Gza-jPqXSxpq&UTr-T 8Q[1hT%+9UO');
define('LOGGED_IN_SALT',   'iQ`45z+gfur+?al+MsI34e]@7-uFeG%+8^|1P+y).A taxLu{L[!-&l73uQ8/8;i');
define('NONCE_SALT',       '9f>:x@4Mrxziq2J~H <A{[RwY!4G/BS07=cF+C<h,-_1Kn.SaL?DXY4?ZzMG1a9~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
