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
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         'z_|PhwO<Yc>Lx0G55LFLF]% PfS-YBWhPiKA+j`q7r#ANJ1D}/6asU!r$1JhiQ54' );
define( 'SECURE_AUTH_KEY',  '8ln,spub`m_%agrDzc0<8;k,+L(RBTF04qWqK_v_=9Rb=E,DLxgUNYE4=o;WSqOo' );
define( 'LOGGED_IN_KEY',    '74fSi!oP=Y3;7O[l^)+9M:Hz(0y8r$z=}KhK^9E~{YdJ/k8tWW%FiI3f=7(<Y}LR' );
define( 'NONCE_KEY',        ']LO1^|/1~zapXuE)-r`RNymH}z.>XI0dD41$ZFhe.GMyqJ>e]3I[o4g<1hIb}?ne' );
define( 'AUTH_SALT',        '7=-q,Gn!)x|_!X_.&9q/m*=0h0(?H_x XYSmR:.N)4BK9V0n<475$oMUgMwd/%`D' );
define( 'SECURE_AUTH_SALT', '~3{:LLGh7J84@=yYxQ,7PRKv09J4p_7P^%#Jj`|S4DoG1.xw+zN5zHERP2jOodwn' );
define( 'LOGGED_IN_SALT',   'vg_;k!:g-vp&;AG%$7c 60W /jE?E1Q(85`sYqh?/@KF,0Bsich:n,x$dFQ3L{g(' );
define( 'NONCE_SALT',       'mQ&KsIb|l&}Z$(=)lx0<;hKnmBDOTgg:^3x?BpC!%[p|E}b*p(4%ohRy;FA~xKr+' );

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
