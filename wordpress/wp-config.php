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
define('DB_NAME', 'wpbaze');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'cbIla~ESi34yB]Wn#nvX3]wUlDuY1[egk[Bg8oTo0.:nk^suh%tL%t;v9(x2ylE$');
define('SECURE_AUTH_KEY',  '+MRqR~m-@Yo]v|G4U%a}+g]1q@4bfJMX9]|A]at_8znv*4BX?dkjA,Wu{fJTUyX4');
define('LOGGED_IN_KEY',    'ZYYWb@apOL6{;.qs+,hG4Pu0%LQXF(nS89Zop+u~bKzBoqd_6q60i8kds~xi)X.U');
define('NONCE_KEY',        'tB]6e~k3O+,:q-~inv4z|C$Z<uWGCDs-1`T#L|}F^jH~HjAQfIdDUIy>CC.OYfDx');
define('AUTH_SALT',        'Kb}qe&pv<b]tQ5qbYlN~*L(K}WlvK~Vv62$:GG$0/yq&d<BfAOouvjEl)GAKn~o1');
define('SECURE_AUTH_SALT', ')c+!>zoop#@~f)v[.&CC/Qe_q1WM04$}F-k,j<ry5Q1*$`mU=pJuYc<ee&|:%doi');
define('LOGGED_IN_SALT',   'L<lH1}dvO<:J;!ndGirvKTjHGa7JSX, !+1Bcl#EdD!(N7,,,gr`!~kR4zO,7aNi');
define('NONCE_SALT',       ':5S^NQ1@c!iMOOeR[k>.H%RD^BKVM*((m3Qm{`bcYhdfG[>)r@BQ4Q/PMt^>Lei^');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
