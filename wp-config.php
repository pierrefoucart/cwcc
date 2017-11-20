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
define('AUTH_KEY',         'Svbm.f_n_.8/qMs]wW+GV(F]=@?q53e@CYrUH$H@|xy}og0 tlfXE{Hn`j8o6w-V');
define('SECURE_AUTH_KEY',  ']G>(v>r5[tLCxS>K?o1L{9m/O#,b)ia*KkLzZM3ahA{0]xCpU3^1m9-l9|~PhDt(');
define('LOGGED_IN_KEY',    '>{3?i_Tc(&_/,|?y{-[#HBTiU)FH/Zc~&n<&2&RDX__2U&t x(SIM^Z]8DE&*Kc|');
define('NONCE_KEY',        '$NB%XLpg&f=qUp2TTw^p:RD;{3[bLwI@s2pX6HqC1D fX6TIANPUH;gpK tHF1m9');
define('AUTH_SALT',        '2}lTJr5!/Nq[c?iDj8Ef8tibcfWEd+Qf2[3tLI uPna~rM4^i rO.zXqVv)Pp@~z');
define('SECURE_AUTH_SALT', '@0*sf^Hsr1#))!9{Fdofd{[xgsu|{_i 8e~Ih)IZWb~Ieb<k7jbl)ZeJ/Zq 6<e8');
define('LOGGED_IN_SALT',   'rm!{+t^pBL8(%`I$MSm,P%i4rd;.DJ,^gT{oC-Y?d~INq|G%*?F5qvoK4XL[~W X');
define('NONCE_SALT',       'b;zw&u2.V}-m!A1b-gibPZ*W#Bwo?R(:<$9v=@s{Vl[u<w,yep&1{0Pzob M032@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cc_';

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
