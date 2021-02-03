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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_dwfvmq/eurypaa2020online.org/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'eurypaa2020online_org');

/** MySQL database username */
define('DB_USER', 'eurypaa2020onlin');

/** MySQL database password */
define('DB_PASSWORD', '3bgVAZwx');

/** MySQL hostname */
define('DB_HOST', 'mysql.eurypaa2020online.org');

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
define('AUTH_KEY',         'd7$Xzq40H!$M|YbjnOZ+1o~6(CyIAMf$a&e~F:mZyTMXRMV#B~(sIzW+JjOmS2r/');
define('SECURE_AUTH_KEY',  '1J~_/Mel`gov6VCPkvYE&Al6?VJiyqCTH|LND^9zycl8(GYhNQkZzdKqL7uw`fI%');
define('LOGGED_IN_KEY',    '6zOtJyL$V115)Ws7&ibe86HaGjL/YN:fP2kv3Mi^0Pdqj:0PPRD/RiFS8+JAU%%A');
define('NONCE_KEY',        'shBDEz:!2iC"bX^K)VPg6!h^R9HngZURE*DWS/Af?Kx4wzYr0L"(^aA%R8PFYBkt');
define('AUTH_SALT',        'JuLCV?WYSxK0GonRc(q5cXh!P9wqq~G9**txAKmQ"wqJoe"vqcaqQS%OfT7P6pU0');
define('SECURE_AUTH_SALT', '+%a:xiq@OFl`L@v(eu@ABmH39&Ak8qNwOwh~OrR;Ol)aT7vy+RVB4+Qsw&SlfD|"');
define('LOGGED_IN_SALT',   '/|!q2mx!;%R""^aH7jfpUtf9y:t|8C~Bj59uVp1V$8&gpM5bKSK(*sBKDZslaQFp');
define('NONCE_SALT',       '%H"U1j&1kcp+OA3L4QB+ytS"Y(1eGmTl8XpPFEO2oAQhi0w~njO8k33Gu+mJmTc@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ua3bdd_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

