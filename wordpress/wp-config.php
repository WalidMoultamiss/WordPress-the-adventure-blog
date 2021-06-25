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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C&4Mb&ic+VJrN41UZH%s@x:Uh}]jz3j{.Ol87-p20=R}beMt5C[m(zo||7,+_>ly' );
define( 'SECURE_AUTH_KEY',  '% +Z*Qh[8uQs9#S[Z D+?)((Qx#g{Y(V(A;BK=i8A6GKy^d2_6bm;)`*^kxx3K!p' );
define( 'LOGGED_IN_KEY',    '$u<X6k|DxXv@%jfUnmwvT7T0vYx(=12zy90S#(ozfRBTia!`jfeHz>@&-$4Mq{pV' );
define( 'NONCE_KEY',        '>,_;mH2(<s:4hjS+8J+.$bXFF6`(upBuC2je/{<ApB0ED<V]aiTiw:!enMttgYhc' );
define( 'AUTH_SALT',        'r&r6~5F}KoatHTw~v*sZ`&g1-]jZ,fvE8kXuZq]WUfYkOMD[AZ5y8$Ol-+T-NDQ*' );
define( 'SECURE_AUTH_SALT', 'C no9e3([Y/Ck=}=>CNd11YK+p~FRf)5;pOpmw1L&:rCHNlRbPMST`!Bk0OcCsXi' );
define( 'LOGGED_IN_SALT',   'U=}unCfY iTA{btLC811PKGvC7RXEmj$#* AN^2zr z]XoT]u~Uiu)j6IIM>ZB5_' );
define( 'NONCE_SALT',       'GapPu)/mJxV?>0Q~[e>`HP.b,2t?<g.XSH=S7+$F(VH a|U0aqS[v7dN%;BX;M!C' );

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
