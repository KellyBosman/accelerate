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
define( 'DB_NAME', 'accelerate' );

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
define( 'AUTH_KEY',         'P{1b+XIio]`WL]fY1LQ}qaD25~wQ#.3B(;3_X2xr};^41Pmx!S7)X&YLy}N.odv<' );
define( 'SECURE_AUTH_KEY',  'W$PrMzz]IS;Vcl%9u^K-EZ]}@It?E?X$V~wTOo63lY+&C|53/T?9aI!rSr(Ab^3S' );
define( 'LOGGED_IN_KEY',    '_M<z`xd$ZUuL[*im~c-UUxYn#,_p3_J.9XQdD08[>f^Qy{&T(pzaYjC@#q2.(<+(' );
define( 'NONCE_KEY',        '2|W=CnFEu+v^V.|(y8>!8U94w2zEJJ6oU14ytM*1+D~8&#DWPl<S7*VFH6I+/7+P' );
define( 'AUTH_SALT',        'BH!-L<u[!kFh:}{xs;(QeL>9]`D<x;MVEl)]Xb<LMI/z{Q_|>2!}c(_vh_<5@Z< ' );
define( 'SECURE_AUTH_SALT', ']}!0,Wp]6T$o|-`rQ]_Q^?xOzSCrZBe>X`80:Eri4d;i`J|N..Lz6_dUA.nF1`ql' );
define( 'LOGGED_IN_SALT',   '#B1Vle  ej`PL9SsACw5HO=AU$)(Umv+Vqs`>M|~E~#+#WOx:R4l1F#qJ@v(9lTZ' );
define( 'NONCE_SALT',       '7JGR-GqXs7H Yz??>DoN5,{phW&^5y6,]?rc)ccSn8t=PmhN?ot{^X2f^^3l^8u+' );

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
