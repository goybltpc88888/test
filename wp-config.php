<?php



/** Memory Limit */
define('WP_MEMORY_LIMIT', '72M');

/** disable wp crons - jburke */
define('DISABLE_WP_CRON', true);

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
define('DB_NAME', 'forextel_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'lp+60-(Zrmxr@ `ZDTw2?kJFvrWtTN|xsSh;vo3:pGP+[meq%+*1-t/@IP+!/Zgf');
define('SECURE_AUTH_KEY',  '0(/`K(HNURZSoA,[;<q:Os~v>7BO2wg?q-n4MtN>g,9Xb]yVKf6:2-KNg1s#AM?o');
define('LOGGED_IN_KEY',    '18JkOI>YulD(R40ch[A{$DJ^j)@i!s[pGZNs7_|9=]#R.!]sXgI=Y^s6a?<vj)kr');
define('NONCE_KEY',        '}~gB8T>zuu/+F.O7X!& ^5(#D{_U{+@h1@7ys;FimCKeM)`iT~SnNQL1[~P+4Zoe');
define('AUTH_SALT',        'Qao>vn@/nmJ-@9irU9U.||Wwf<1pog>{`=Fajnz 4!ro_#&u2]p_rpsz-Uk =Cjx');
define('SECURE_AUTH_SALT', '#/pr0P[2R#*rr!TfDnh}o]{8A!DR6+D.1U;]7zmny|EgKo6Bbd%N(-Et2mxG_s[t');
define('LOGGED_IN_SALT',   'J?w2MlXOCOp(A)aol8|cdQl-;t4C,4M+$np>Bn1gsp5CfT _:rLpF>pi3SsfL#|e');
define('NONCE_SALT',       'k|-$`iZb 9=Tj?gVM@WZX<~&e>a 1de=7|;LmYJC^v->2hA#e,FD#$vE=,#LRa^l');

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
define('WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

//define( 'AUTOBLOG_POST_DUPLICATE_CHECK', 'guid' );
//define( 'AUTOBLOG_PROCESSING_METHOD', 'pageload' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
