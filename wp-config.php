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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'nPskm-_T?sfL28|~gz;_jc;o<8{<@)wvVby(MEQjm?0dD)vOiVL~ ROx%X8caN&`' );
define( 'SECURE_AUTH_KEY',  'D.#sRbgjW{tcDEwT:ot:-ulVIN9h)g>E%))&~Rp14%C),2*Qz<f<|/$Adg~I*cO0' );
define( 'LOGGED_IN_KEY',    '`-LiGXj].0xa#}Nr`~2je<3X{ixeTE):T@RA cZi=oj=0!T|CKjN<lBZSLxUK6TO' );
define( 'NONCE_KEY',        '!e4#UI1:_Vzt<KLa*>;qP*5}-,[#}tAX7?O#`MffM[Jg<yvnIRsAVXk,3sH@[+&;' );
define( 'AUTH_SALT',        '3|7|Q:x 1s@EC#y*Pdo]>] `jKWmgbX^e`W1TuAaQo3zb_fvs])4JXQz83&b#^6*' );
define( 'SECURE_AUTH_SALT', '#;(&Z8RtI5tbb<IX!XCNGDTzk8b:)H)ZWccV*0rsh54{o O:NTxhXcDT:*S*:^k>' );
define( 'LOGGED_IN_SALT',   '%7FASO@/fi0lw.HcBb&@I0#Rj?|p1D([CbB.}aT*D++r8j[Fl2I|%Z3R2g>,[DAp' );
define( 'NONCE_SALT',       '(~0{f!jj8iU:z6B}+?W=J]--C,Nw;A`l,TIsn3A[iej<gU-Now/I{>ZfdkG8mCA]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
