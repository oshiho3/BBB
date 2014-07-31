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
define('DB_NAME', 'busybee');

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
define('AUTH_KEY',         '%+*3->9<]jfLE=6,<g(=M*(.T+rW*~0J(o!-Mnkb#-[|T!mLXciN>]:^SfSP$rx`');
define('SECURE_AUTH_KEY',  '^(V!<*SoygSn+Y4lmiR$suAk,7[[/7?IDWT>0hUe*7anE2?,+OMhTJe-@@gN:Rqf');
define('LOGGED_IN_KEY',    'jh;6aiT6mAHG,k&C0^HDwDC6/)O,2A7lefc`~LT:cG}50-{eT:%c7{k/g=j+|zW*');
define('NONCE_KEY',        '<L2>W<+~%Zxbm6flb}>#x)(d`hb+(Da(:_$KLI(Z^rVVu+,dvmQ{u?>%d,Gu*T|s');
define('AUTH_SALT',        '+e{oMOh()r*-7[t#Bq;{x~3Fpw>|)f%|%fi&>7(XNK$ R-q~G{(?VY4Jg418rf8P');
define('SECURE_AUTH_SALT', ']y~gZ=WCY:[!C#t=d7<o+e_>N2D0K9c]SfrjQ3ceDwGkvMo9lNHUh_^!FZ6*N}^@');
define('LOGGED_IN_SALT',   '*a[w5NU?)bAfe~]?ck9lL#@]#dc-_j0vqqFh#3|XLPZERVz>p2SE<rw-uf,%:]_V');
define('NONCE_SALT',       '-kQ}KC+zdi(L1h-`DE[m|@4av<+J$tDq1n6,WlvN$}F9-@MG)0<fVU0 [D7T&Hdz');

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
define('WPLANG', '');

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
