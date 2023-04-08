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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siteall' );

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
define( 'AUTH_KEY',         '`c8:7;W oiy/d.kB26N|r]_8Fi|0~.l}FH4W]pXg2,kw%QvIBYJoXg6w20*.c.xK' );
define( 'SECURE_AUTH_KEY',  '^^FqPoM-;<an?hmuriWS].W.+ch1*#$b.<@D.Z8^:l~Pc]~CQW[(arbN=,L<JnIu' );
define( 'LOGGED_IN_KEY',    '8/bS$=.;<$rHWdi>b#]@n}dS&>$[I/xt>s^;3$6D&>|R/SDjla`sPvS,f21+180)' );
define( 'NONCE_KEY',        'F#knr@!O3G_qMmQDif om6@qTtpZG6oH,Wuer>b 4K>HPftTrFZW@kLWP~mP=oSs' );
define( 'AUTH_SALT',        '!NY@D^e <-T!roDs/AKh(haV,LF0i#a6n6RqmKOKG%;2{$,*R$w%B+punDV _(D8' );
define( 'SECURE_AUTH_SALT', 'j>jsjMvI$+qj[NMoPBrEfkI-m(^-Mw4fd}/yE(-EfZJuQv?](*)ZQ*<e3W>Bkl^k' );
define( 'LOGGED_IN_SALT',   'Hu |iGdl(;i(jY#.<6 `$[Hn>}Usipp#)aH}li+?VkmU{JJ#&SLPGx0p;_=lx ]9' );
define( 'NONCE_SALT',       'hh4-mpl[@:(M]PpxE.U0<xi}NqH3IAUc[LrHix`n7~$M.b5)UitE^$fQ(FXh+x&3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
