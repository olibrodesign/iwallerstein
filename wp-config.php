<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u773799086_pQZu4' );

/** Database username */
define( 'DB_USER', 'u773799086_6z9Re' );

/** Database password */
define( 'DB_PASSWORD', '6pmDu3WA1L' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '-O)-iWZfeNg*6I7~rft3Y289NjmVGN{f;-HE@lh!56_fj7zsPV}kuuhWqJR(5IGe' );
define( 'SECURE_AUTH_KEY',   'Q!~9w#P<|1_A=>Eyp9I0/l(;Ne_>t@7;,pGjO%o/i B~lc5)6z$r[VjJ+m*6w+^}' );
define( 'LOGGED_IN_KEY',     ')? ]nJ-UeGnpN|C.09Vs5|OnKQsRZ,~l_-;L?l^:I.mHL.)[rR8{<oa9GO7(2559' );
define( 'NONCE_KEY',         ':/~j(F(~xEP1^2B&2:JWVa_u$L(PLJ]fU.Pu[Q%/SV7D2,A)&FLYEyE= FU*WVyu' );
define( 'AUTH_SALT',         '[#}&A,4Ewit6&WxC7N*sHlypv|5m7CEq9%0bZO^LW6H;S^i~>o|$Y,q6|28NL4C)' );
define( 'SECURE_AUTH_SALT',  '|pLxmN(*XqU?Px<UloF#n2u#Ye_+8|brc`VBs}nRZGo/ M&Zbew]=kL(6u7(v0i1' );
define( 'LOGGED_IN_SALT',    'E2A_-@qwa!%un)aoBi)~qtk3>uJsWtnCwg e6NkLB+N}M<L/<J>k2X^MFs$1S>*f' );
define( 'NONCE_SALT',        '7BSRl]<EjLbJrum*yzR~&CHyCD:>K4w&cc{gt3C?H(>a-$`PY+h_x^0K#(/YttQy' );
define( 'WP_CACHE_KEY_SALT', 'a:mD7bjpK).j@Xy?sqUSf&oK%vwbZ}zDeE+hIA~B2U&6ps@o6ml@octINGNCz2d>' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
