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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'N;k,#wT$*J3z1:~coO)lzXWV4]Ueus@8[M+iu#qre+R~61F901e[iayD[$+ug$2[' );
define( 'SECURE_AUTH_KEY',   'uh^m*sJ[Nl*n8Fid6#|[Y`0j28sk-,[t:pO_CHlHH-rL#H5+<!b24kxYXSen8dk!' );
define( 'LOGGED_IN_KEY',     'K|&@j}v4;C^VWyEM4=sRU$SL%m|zx[9b+Tx9Fy7i,fgch?6zPfOl3G;>I};[c~9S' );
define( 'NONCE_KEY',         'SNmf1ci-Qc(|Mow/&C{;m~V2_/SrHZv}U.U;QbfdZ@UXdOfNI+.Km9y]f9-C,A5t' );
define( 'AUTH_SALT',         'B5gXLYi=i1s;fn2Z6Z~FB_+Yi@g7$tNST;kOi>q g2;y6FF][&7};DkD2tX$JTN=' );
define( 'SECURE_AUTH_SALT',  '3[NbI[+t<(X!2@I?QFF;bjYBi1#@t=q<}~8s5,?P3lSLo}YJ}b%;%al^.73{`bBS' );
define( 'LOGGED_IN_SALT',    'YNZ_$g=iKZV3k| F_qu69@&B8~knI|32qa$aEyMjUU$.8uim_B,z={*Xds;i$}%[' );
define( 'NONCE_SALT',        '?rA=Y.pAa~hYAf76udd<i*P#mA>lpNN&.>xBBR sQLb6tV^8mA>d-2.{&x1f.H,o' );
define( 'WP_CACHE_KEY_SALT', 'N!K!Mb2/NTk`b9Y=I0hV!m|}w6SPDI{=5M(us$lF xwf*eA.6UNjMRbg8 >B~]=s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
