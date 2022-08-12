<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ ); // By SiteGround Optimizer
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
define( 'DB_NAME', 'u288448544_web' );

/** Database username */
define( 'DB_USER', 'u288448544_web' );

/** Database password */
define( 'DB_PASSWORD', 'y|?j/UR@P|3F' );

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
define( 'AUTH_KEY',          'G0ypMEpP&/C8R`WOS|+bdp(N.nY5N.=qwt&:k-@@$SV,.HS2VrWQF-&NZbI$&aE!' );
define( 'SECURE_AUTH_KEY',   '.]1j6&tHD,H<ol4.|h/j6!b36QF%e7+LUbFPj~P(fM;?7D1`[OWd=xk&sz4Y+;C[' );
define( 'LOGGED_IN_KEY',     '`_*pIb.-j5t[ c(c,F=BYk<0C~C_kmN|O{pu}y*IXC@(c*httb&p)!:** E(~Sdj' );
define( 'NONCE_KEY',         '.7PI}Ok(WLIyTd}vaX7@J[B@H>ZTXrj%.[zC6%|Vw3WaukxIHWJP#a9huLX}BKGl' );
define( 'AUTH_SALT',         'RTFR;-v)b4`vt}h`@_CbuV^Xo3o]lsCXl,C9>~< A2(c}OrH0T5C!}t3vPi+<+1 ' );
define( 'SECURE_AUTH_SALT',  'N6@F8_aOfO#-HSvf__t]y<61~$sbwgi$W8K?1ru%-u>H)Jrc.@jy-l:<+Zn%D3eh' );
define( 'LOGGED_IN_SALT',    'y}wrtQgS-DCa~ +HgE@gp%>^I;P>9:h:{w5&]aVkRWgEoFn{O%0<k!h9LvA6u>ez' );
define( 'NONCE_SALT',        'S@;GW7!=4wBEZv{329v~uf5~$OC>tX_#U?mKeuHUIVGVq!XbvcOCVq1Z`cqVdCvN' );
define( 'WP_CACHE_KEY_SALT', '|3b,xsJ-H,Vj1*R+1K#,%Em4uVW[PRJt5;?4i-tvNKHwc-Ai_bQ#}2&^K*mksi+T' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wvk_';

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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
