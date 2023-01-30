<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'steller' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v*N$H@Krt_u[g(~+Fm7n6#w/[iFl}G6e>H*v:V0>f q^l|kj&7#EN7X#b[9b@JyB' );
define( 'SECURE_AUTH_KEY',  ';0;%N~Hxk,l4s&YsGx<5n,8u!,>,;8YTu_.VCZkU,iK+7W >&W|0}^K3+yu7mAfo' );
define( 'LOGGED_IN_KEY',    '9!]Fuva%$8@Qe2p;20furynuF6CcDS!F&/Mi|OWnzFShy19Q*:&BU%O8msmP$&D%' );
define( 'NONCE_KEY',        'aZr<4yg/,O&R=^o$@?QL?3Xi3H;baQ;W*O?v_6s/7M/7t%arpBhsVt3(c]R]|C^;' );
define( 'AUTH_SALT',        'Uw<M8$nU(_6F{z^mpXv Sy|eYIvB+>$wZPEK|8TL|nZ`ET&fz<Pz1Y0+$cj,M0>$' );
define( 'SECURE_AUTH_SALT', '5U}^{AFgwXb:0SN6AjPI<4d%SODq2?@Q@+8@:N0L;5wr{gE2J1L&.K/*#g*r#!%$' );
define( 'LOGGED_IN_SALT',   'A@X*+[orz|3Jc}~mrw]aTBad#(W3Z7H+k>Zk[gEQ#{vn6U&!*7hDXlozen&GBPnI' );
define( 'NONCE_SALT',       'R@^IGE)Fj;~|*n9`J#`;IJ%tavuJXqk59Dj0kA,znX~Bky_(1#VEIh#YiljOLJ;t' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
