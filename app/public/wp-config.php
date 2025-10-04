<?php
/**
 * WordPress Configuration (Local + Render Compatible)
 */

// ** Database settings **
define( 'DB_NAME',     getenv('WORDPRESS_DB_NAME') ?: 'local' );
define( 'DB_USER',     getenv('WORDPRESS_DB_USER') ?: 'root' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'root' );
define( 'DB_HOST',     getenv('WORDPRESS_DB_HOST') ?: 'localhost' );
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  '' );

// ** Authentication Unique Keys and Salts **
define('AUTH_KEY',         getenv('AUTH_KEY') ?: '@5$PJG%nmyQcq2Rcg% xhB8`X>WVS5Q!2jRAUkZ~?9I$g?X(1JMS/*SuIYOJ~7]]');
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?: 'NgF*m1)AXa`Hbd9JQ5vpAnS1j<]za#=</?&1V `LYH]0ovzlb?hsTf$v0|[*3F&W');
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') ?: 'i%6[Em<{J(Ajkl&;]/}1GyTb_d=`{ZApr%VxJ_Cg*?$ClT+$F $M^??Zth]})VU ');
define('NONCE_KEY',        getenv('NONCE_KEY') ?: '9m$$3 Ei,C<&O8mpwmS7/I[&)g`]o~TG,m[o#8YMR>67VKUc_%B3vS/iG2^op=Lf');
define('AUTH_SALT',        getenv('AUTH_SALT') ?: 'BD` ByBp7)H]hK[#fLC~3EUsgdrp>4G;=ucrF:7dV3@?81:H|d76z`P~Fk$B7V|I');
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'AE^.n!dqJR`-TUh[P>H$t>wPm@5o@@E.6Q++c4u+!g/mSfJ^>UW.{fu9h~Md!e$A');
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') ?: '#k`xaK<k@uF|j&]Y`sty][Asy4hpO_#$c*}$yNLPBtopQQ}diSYCk@y^,-mj(XG(');
define('NONCE_SALT',       getenv('NONCE_SALT') ?: '(b8?KU5;_rq!gA/`qxUy$%nK2-r1lwd|1_&HKO!esQ:#F70Ia4P %A#g>Kt_I|7j');
define('WP_CACHE_KEY_SALT', getenv('WP_CACHE_KEY_SALT') ?: 'uzXy*H?@Y]!6arh6OU[{d$SbjSsu#sC^e|!(]x_(;;z,KXeX;Jai9*q-{]D8u3 a');

// ** Database Table Prefix **
$table_prefix = getenv('TABLE_PREFIX') ?: 'wp_';

// ** Debugging Mode **
define( 'WP_DEBUG', getenv('WP_DEBUG') === 'true' );

// ** Environment Type **
define( 'WP_ENVIRONMENT_TYPE', getenv('WP_ENVIRONMENT_TYPE') ?: 'local' );

// ** Absolute Path **
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
