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
define('DB_NAME', 'ElementorProject');

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
define('AUTH_KEY',         '@yfPQN>j>*91vkR%PIxN;@Am/Gb8_<q!NAH2KgD]HUu~TZ?R+jaN1.V[wu}Y6CE0');
define('SECURE_AUTH_KEY',  'Ak7=qE`S4k`0jFJjJwHIQie<C?rARk?dW-]+)J!^p7t|-#^{/RTOO+aO^DIVQ(]S');
define('LOGGED_IN_KEY',    'luDi?5 -)VC#0N`E)=f11UUw@8m%BQ(ZrwwL@@xQ.TmWUGEmYx B{vo:qxgcl_TG');
define('NONCE_KEY',        '91>aF !&)p=Rdx+r#&>W-q P%Rwr`w-DiL==t$MD)D0#5.4Ew~=V~<mZ_%0kO:}D');
define('AUTH_SALT',        '.Oc=`Ww-ix9^6Yj~1,FwCx%r= =TZ_MDLObO?S(e.&}Jke!r:up!qp|k1_4SvhzH');
define('SECURE_AUTH_SALT', '{v?he-/5NRP[~{5UGu/)0:?=H5`JN@ir_e-*#=WoE9p*!dJ{<L|[6l6n*ii454hB');
define('LOGGED_IN_SALT',   'er7ofje9*w40gCNo4].+I0.d;WU~J8+`U3&O1Cis)lePTs6vadvhpn8$_SO!3jD$');
define('NONCE_SALT',       'iUj-DkjidgBe[m95^|*[p9ZwOxT`JVn<0m<^(R(e!_YXLE&&uwmhK`0e]2LO)tR4');

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
