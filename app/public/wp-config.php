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
define( 'AUTH_KEY',          '@5$PJG%nmyQcq2Rcg% xhB8`X>WVS5Q!2jRAUkZ~?9I$g?X(1JMS/*SuIYOJ~7]]' );
define( 'SECURE_AUTH_KEY',   'NgF*m1)AXa`Hbd9JQ5vpAnS1j<]za#=</?&1V `LYH]0ovzlb?hsTf$v0|[*3F&W' );
define( 'LOGGED_IN_KEY',     'i%6[Em<{J(Ajkl&;]/}1GyTb_d=`{ZApr%VxJ_Cg*?$ClT+$F $M^??Zth]})VU ' );
define( 'NONCE_KEY',         '9m$$3 Ei,C<&O8mpwmS7/I[&)g`]o~TG,m[o#8YMR>67VKUc_%B3vS/iG2^op=Lf' );
define( 'AUTH_SALT',         'BD` ByBp7)H]hK[#fLC~3EUsgdrp>4G;=ucrF:7dV3@?81:H|d76z`P~Fk$B7V|I' );
define( 'SECURE_AUTH_SALT',  'AE^.n!dqJR`-TUh[P>H$t>wPm@5o@@E.6Q++c4u+!g/mSfJ^>UW.{fu9h~Md!e$A' );
define( 'LOGGED_IN_SALT',    '#k`xaK<k@uF|j&]Y`sty][Asy4hpO_#$c*}$yNLPBtopQQ}diSYCk@y^,-mj(XG(' );
define( 'NONCE_SALT',        '(b8?KU5;_rq!gA/`qxUy$%nK2-r1lwd|1_&HKO!esQ:#F70Ia4P %A#g>Kt_I|7j' );
define( 'WP_CACHE_KEY_SALT', 'uzXy*H?@Y]!6arh6OU[{d$SbjSsu#sC^e|!(]x_(;;z,KXeX;Jai9*q-{]D8u3 a' );


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
