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
// define('DB_NAME', 'database_name_here');
define('DB_NAME', 'max_gala');

/** MySQL database username */
// define('DB_USER', 'username_here');
define('DB_USER', 'arsidada');

/** MySQL database password */
// define('DB_PASSWORD', 'password_here');
define('DB_PASSWORD', 'Arooj1987');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         't4d^$&u$.#jyLKT0=9&$o y&ygF~9ky[>%6]Z*Fm!O{,6&z95)cyFas#gzL2TsU5');
define('SECURE_AUTH_KEY',  'QXY^*[awI)3>%_qP`_4o=xD~)b3*@.oR^Z,oj/0a>m8qFNl/Y,=n*Pfr^4PU:RL.');
define('LOGGED_IN_KEY',    'aSEChpI-|Qu|qH H#pd$mg!2NF/P/v0k+0jfsCzQc@u@oF=nQ%b<!,7=oYg>qe$7');
define('NONCE_KEY',        'IO Y.klFYvzIeR;Z8s*_@)L(&rO<{N,3Rb|XF4>j%=/.y^/G<Gxy~&H,]KK.Qg&w');
define('AUTH_SALT',        'cR 5^6t;%7^^$R1u{TTjIm$s!R7Jb.qTJ/!F{Y2rr8IYOy!I*FTnP`qq2X/pC uy');
define('SECURE_AUTH_SALT', 'P`1md%k*xPcYS)U$*k)p#0d4IWlZdiP-2GqT.P m^UTl+jI~U7%q9_vZpSg.8WG6');
define('LOGGED_IN_SALT',   'Uap?ZYKG;e4Lmorc%L?k)QBIu.RN6O>vA~Jfy-x*;dKB68KMsCf%4+ij008ikt}^');
define('NONCE_SALT',       'MOtyAL6vVg)5kjjwG9J&g8Fh=66h&>7riHX#O23F]We[EovuSda/)gq;510ZuCkR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
