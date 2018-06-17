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
define('DB_NAME', 'jnv_new');

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
define('AUTH_KEY',         'Dd]#9g<Z9EK|4wOARI%JGQx8/XKa!M7Sg0Q4Ze~L#`?XCzGKGpnU8lLwQ1J28#Al');
define('SECURE_AUTH_KEY',  'oB0UPW#pmgeS:XC`T.y|5B;#>un @!$#_`t-=Um@g2#=(F817z3=a;K],_*[i;^i');
define('LOGGED_IN_KEY',    '.BjAZVlVto{AKoS=FKy5?U{=>3[sUg?>sJJ8hqeS>+;34ih?lz#^GYM&A7r=kR%G');
define('NONCE_KEY',        ',y11,zW0g%%i,N|zQ{9U{882mf50$ DKTQ%@Pv6py`xp$fk{@NOrzBGlF0)^|g|N');
define('AUTH_SALT',        'z7PS2l7h&;`.+!cDw%5yX,-j+?pYk`x>[2Ue6od3KS,xy>Ei*piTuEx$9e:.z4.*');
define('SECURE_AUTH_SALT', '3KY#h}7+CP6uLY!av9=H0 ym%.}EOR7i!+Ra3jv9RW2gzm,dwx?_:F5kt3%X:=i1');
define('LOGGED_IN_SALT',   'b<p<2C%|2QDwkziHo#0&g{Ic7G;Q.3JuakDR+n)&57?h4-RwNGKllvz?Q]{k+=W~');
define('NONCE_SALT',       'o.KKtV%VxtQUp6s?$@z*%k3k:uG{;yVFUzApB*k:$yeZ/@WD/]/1C66O&w6grq::');
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'proq_';

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
