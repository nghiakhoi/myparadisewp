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
define( 'DB_NAME', 'myparadisewp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uit@:j;P*{nq?3I>|Qu&Iidh*lL?w+|G!ZSV0)?!@b(m[Mp5Cj.=)!3}1i&mSP53' );
define( 'SECURE_AUTH_KEY',  'tei!.#QTqL@I;I,Qk]i&X#-m}g^YFBj:X L88[8vqmsK=#iP>[ll/J5m.AZmlS]-' );
define( 'LOGGED_IN_KEY',    'qs[sCg+5#X>&R8YBX}I+,`54eenLwXi3a_IH{MgL=b<$aaeA}z|BLXB6irFDZB&1' );
define( 'NONCE_KEY',        '|zVDxV6ucB3UTzu9k_Vj:m`{Q8ZNPb^U:|+oun2P!<t}^43Z=6-Do@Y^3)M$Hw;v' );
define( 'AUTH_SALT',        'yLgViRMhY}xQyQ@+r6pYc}FCmX2ppkyGlc) K[id^C&`8$|P, `zO!fKj,njk]Zd' );
define( 'SECURE_AUTH_SALT', '7S8EB-:5)}S3wee{|P<Cq7DKR7c$~WO7Y_n7qf7kdc+6$1R.Jho?^(Xtbiw36_8Z' );
define( 'LOGGED_IN_SALT',   'X~O2_|9ohT%s}ky8q%[/$Otk0CuDO#cF/N9&vQc&i.S%v P%iuCq[zi^(;q]E-r7' );
define( 'NONCE_SALT',       '9ohrSYbT7zq%lyp#|#bPGQB_U,quN9jO1:^5YapRsg9V)C&]H<p&.n/Cz3B)2(#z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

