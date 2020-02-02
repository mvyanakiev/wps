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
define( 'DB_NAME', 'wps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'jO;3u/o3r]#Lc}baAgM3QPi.3u%7[jIB6(*Vc.B*]29I1smK<*S8e^gg|~.5.)Zz' );
define( 'SECURE_AUTH_KEY',  '2&1joe08~ /:nIz7g$9A@7RCD~6]Dpa7b)wr5tcD+TkiN47I>; S+4#ZHlUSEj-K' );
define( 'LOGGED_IN_KEY',    '1rLeBg6F!-.7<sXrviTP%Xv+1.}-dh?+dz5k#|Y[omCwp7{9l68eIjKR,x9M~C6)' );
define( 'NONCE_KEY',        '6P(yW&[OE9a]@4AkPPUc^f!52@$f#yL#)(7T#Eq{XFEGb+sIxP6S 2j760O|Z8]}' );
define( 'AUTH_SALT',        'DkzNn ug`S]T}c.@M(c^6pA,muOY8-<[icy9ay?:+d*V@VD!zVbsa~$>8c^SKlTV' );
define( 'SECURE_AUTH_SALT', 'voc4AfJ;Scl9wALf-^,y7nv6!OZwT$`D)D:_X;7jz{TUWIn#2N)x9W5]<U>oz&(Q' );
define( 'LOGGED_IN_SALT',   '#:f7n)~a_J#,<rsKfm@S^jp`E4%AQHGz5Ek?md$Dsw2wT#o@8(VXGR?9Bl&r{CG`' );
define( 'NONCE_SALT',       '|O(kQ*=@zovLhI*3,DavT+_2<s2k#66M1%e!(e`ootQBC$Ffh={:kh_%ft+DWVYI' );

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
