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
define('DB_NAME', 'wordpress_vocht_in_uw_woning');

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
define('AUTH_KEY',         'zuv=Ib7CnXf*ZmAH!mDL`l|q7Xxdj@[-9V6O:Y3a3|/YO?UQ%D0.uzb8u;T,fmAo');
define('SECURE_AUTH_KEY',  '}e}1Rbn5>`$EMoWU(4]75$*Xjqc=99!@~fS_!,k.Lo+YUT{eS=xnK9+O&l@+OPO+');
define('LOGGED_IN_KEY',    'S(wykDa5v+.J9Iqb&m5<J}&h(Yt?yH:}%5AaoiNK5]geP/Am6HMpvnN|/)uMC*.q');
define('NONCE_KEY',        '+dwxka|svkQYCqhz0_j[|v!qI|sTT|pQHS{Am-+Yb+p7@EZ*HMVBvI0m<KjI~XG6');
define('AUTH_SALT',        'e-Y 0#C(8Xy^w;73Z:8=bp&cmm$lJke^>6H~Od=1+L[{v1jz,60WlHI!fPq~VdK}');
define('SECURE_AUTH_SALT', '_XWdxn|f8w)r(VC{#42w,VL4_CIZvMUC$;V[SN?+l>A>WpBsdW|(p6O.L&v<`U]!');
define('LOGGED_IN_SALT',   'VCOTI{A.jp*70p9{+,j|?og5%*<SFrtGf*[^4n|A%ljsQ)n%1tm-{;BO`V$.$|cn');
define('NONCE_SALT',       'oD57yea sxa>:=|fm)B{>@Rs=p_[|5`)1GvLL-9zV6Gbgjn;byHd@-aW]9m^bb~-');

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

