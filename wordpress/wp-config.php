<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tw>JfQ&Q<-FYnMD(gd,)VFpM39(y#A,lGHp$!+s`(?nezFn`Icg>]VD[&iNEhvv3');
define('SECURE_AUTH_KEY',  'aPx.-JePE#Tz/*0ZZR#gUulZJlnLB2Na|{bnM,5TEP5r|q8O-1%1h]TPw#{3K- -');
define('LOGGED_IN_KEY',    '.Ci ;4dNPPjF;=gMC<kK[zAXmLbny!CS?Fr<?f_KM/=6q77}@M;6]j@Z}{Q@<;_1');
define('NONCE_KEY',        '?FIw-kZ>mep0q[T3ZoGAj^`VVT_tK0OWt?}H3KT-m0Al~]A8_x+S_A)PeibSQ&Ks');
define('AUTH_SALT',        '?U }Ft_E;DW?tChOb|cfL|<N7?c;V_KF=fR9b=z|-dyf`3z~f0?8&X)I~^WTA!N0');
define('SECURE_AUTH_SALT', '1F4DBc[w,u,elnIWZ-Y xsF-%rJNL3qLA>zqL7uZr1c+@PI8fKKjZ.A4{yM}leKf');
define('LOGGED_IN_SALT',   '+Y CiBbeW@{[=jbUi9OFh:99.6J&ka6;Jh??^^iI%>M?nM+s^DTT6tCV1XxPQ&T.');
define('NONCE_SALT',       'RGDfYs1Y-;<}]2Fy :*n~Cu@-zX[}(%GS`q8f-M)m.jnz):erjmh|ht<Sm%mj/>P');

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
