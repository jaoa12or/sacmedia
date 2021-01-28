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
define( 'DB_NAME', 'sacmedia' );

/** MySQL database username */
define( 'DB_USER', 'sacmedia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Gvvs990613%' );

/** MySQL hostname */
define( 'DB_HOST', 'sacmedia-database.cxcrovvbsswg.us-east-2.rds.amazonaws.com:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'C.@t99*zoR$xp7bbLl-Y#8h|Ygrvu+|Y2)A07*bCt0|SpqMf70XW~b-AsJ+h|!8p');
define('SECURE_AUTH_KEY',  '9Fd~U1P(!t!Hgt>;djy5|CP|YjI4ryiT>]*BYtXX[wDj-@Q/.8L=lTAV|_#LP{l8');
define('LOGGED_IN_KEY',    'xZ)/uwpC)FzbY^2I-._nGi<=wIWSMCe*mwnuS(yr|@9h`j-Iaw*3Nu;C70n}bOn-');
define('NONCE_KEY',        'fb|hs,|~j*`/[k;8!#+TM-mEME}!l4pJuPW;}oinpw6+-1M]||G7Cda-be-jYZ0;');
define('AUTH_SALT',        '>/$2*8BwHuE>b[=NGi<Ma)mQiD,XPr%eCN^!*0ZqQw8gy<kM%L2cL,K41-5,QZw!');
define('SECURE_AUTH_SALT', 'mJ}OcCeSs-G/RAHVj|20 DEbs+%QK(~ZcvTTJRUW=t`P0|BV620A9=4:PPoyAO2v');
define('LOGGED_IN_SALT',   '7|Zp|`2pQQ@<lCxCk9c{u)4T}1Xr}psvk-jJ:Qa8pi_}+sLQ3uZ?:g<ySd](M7I4');
define('NONCE_SALT',       '#08t.@`$ YSeB9.m!i+d&|ZNt-%cAaB#?!(#|#|DEH(g.[p.[D+1m>8 =^=yKo|V');

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
