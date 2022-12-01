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
define( 'DB_NAME', 'warren' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>Z|c|sB rkSKRu] jJZEpBEa>=M4EA]ZJ9=y|jE|_!_So|`9qA$j-qI[MNOs#p1N' );
define( 'SECURE_AUTH_KEY',  'IE%vaedeEnac-v|V8] )Hfoy`[2GDW24{f3CYQzHIb1E0,7f6/r>(T9Lc:lT~etN' );
define( 'LOGGED_IN_KEY',    'XCZAdi;yh>@{k&sD)_jbu[<-l3Hj#9;*%SHo*1B P/GeA;VmEx[?; J&e=`*X;]U' );
define( 'NONCE_KEY',        '2z2u9!_`+t#9!mVw.xe{<KETqp@+ TQJx!1(6;6]NP+AG@@@$B$=J4&y!s[GvDT4' );
define( 'AUTH_SALT',        ':1d:o~EIn66m&zbRss`6!;J_Y;sWg+G!6*g1rD`Eg2gmyPZX+Gpz=^G##P|$q$!I' );
define( 'SECURE_AUTH_SALT', 'x`M2;nS=;$(b?yDrcCRBLAZA#KaD<!?Rs&{2 d4xdwK?p{eNeacBbR=7sH.=jk;5' );
define( 'LOGGED_IN_SALT',   'cbs5a%C@[RRH8bjwjc*aM [y)N~NT<74]QHg$dxy#RYFy{n8X51@$VS**m~0F^[;' );
define( 'NONCE_SALT',       '3mUI:oVDjS@Ab@@mt&JWgg/2{a3pc,%NPCCT`Y%R}7r&[pDId#u>XC<YswP]5/sd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_warren';

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
