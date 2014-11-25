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

// remove <br> from contact form
define ('WPCF7_AUTOP', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sublevel');

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
define('AUTH_KEY',         'r0%J4iXh fCcoICH5O@sGzXI9JfqZX ]b6HB($EG0-B?KLc:S`<vCV7-z@M%7)EH');
define('SECURE_AUTH_KEY',  'z>aeCF1pzTP.mQ+3<cD~6A1,VrZ][?<s<q_S;EDX#f}/7Wv<G{$,< JvnHX0]a+=');
define('LOGGED_IN_KEY',    '*HP-N+|pP/BiDZ[ XB`H[=do2U/-SHUcE5L0g2#!cMC&Ezv>p_Y+NtiOt/5Wf){I');
define('NONCE_KEY',        ':Hf?n(NB:6;+|U-PA~5~~nnh]<I]<z76it!8w),!vJKXWLrNf!EASNg_S.j%#k~7');
define('AUTH_SALT',        '^`URt !R%j)=D_cZ{|<za| +XN8$Fmk?*,^9c+?|,!|z4.`kMwRz6<a,io U>B}c');
define('SECURE_AUTH_SALT', 'Q&E{O T<rCAf :5ZcEPJc?u-9<nKBE|_<f] ?!L-{3TZbm|k-0 >8PanKtBy0H-F');
define('LOGGED_IN_SALT',   '%4iC6E~;3AS<d_bSojL~Dx5ej%/|-jtXS:+V2/h(HvuWucP-B(2q~_x=q5e3Y[dZ');
define('NONCE_SALT',       'P*~5A-nOd8Mxi4eQ;yP|T!bD&tDsch$;#J$8;lfuu}k:`fn3@T-p%pa^rteHo`&2');

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
