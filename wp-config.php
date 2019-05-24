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
define( 'DB_NAME', 'nikhitasawant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'cpNq}hVg{Z(9I.~7tLe@4&&U=[Zp(aGpaj1A(N K)%~SEnS7yoq[M5_U)oB7qj&R' );
define( 'SECURE_AUTH_KEY',  'L^tP<*7n{JZ//N<8?)J=Vq3HVvq}ykxc*BXge&MD_bo,ME;Q&%,e$Y,]0whLA48g' );
define( 'LOGGED_IN_KEY',    'K|cch* )&dXI4(5AsP+p0%6{-:ne)!=`+/`_[n#^Y.@(|uW+TidY]*e_?.xubE]1' );
define( 'NONCE_KEY',        'Ux%9vws<yg@8RJ*]8iYN6: {$KL6Vs-j,L|dw,ul>?K%HB?H2RKD[vZqC 6W}hX%' );
define( 'AUTH_SALT',        'LWp m:~~`zIk)qg:sqb@9MuC00P<Gal$hlh:>kW9y5?e/O*=beSF/6faYqs*&1Ky' );
define( 'SECURE_AUTH_SALT', '|=8OG]-jwJ;z-mSb:-;Rq6S !VqsD_-qCi{@Wl^@=Trr;Sc?F4/w>ba1 C?EA<wk' );
define( 'LOGGED_IN_SALT',   'Nj0Xtf+uQJorQ^Y)wfLa,[4xZWSR6{U;U*7=&p9g/Vf`_6l(B0dQC[dj(xvXoQqy' );
define( 'NONCE_SALT',       'Tw`+#EzT,27SD:i1LM5Ht1?88?<o^:z2;XT_xU[|Dc++?9%}?rTK#CifBMRx9m)f' );

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
