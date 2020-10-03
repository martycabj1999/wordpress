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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'rockmarketingmundopoder' );

/** MySQL database username */
define( 'DB_USER', 'rockmarketing' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c7d-p8qn{E8X^AZv' );

/** MySQL hostname */
define( 'DB_HOST', 'mundo-poder.chbtivyzgznn.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'qqxgcnm8zonzygtrsyf6okp6xetkb8b6r5wsho0hbdekqgfhxvltz7ptq8vwuhu5' );
define( 'SECURE_AUTH_KEY',  'dgv1qa2pkicsjjiscmbmblzfdob6jck3ebzoqqmukkwo1mod3fsxgjlkgx9x1ikn' );
define( 'LOGGED_IN_KEY',    'b3bboc2uiw0cridz2p1yp4njyqlfrcin7pkbmbmsddwkofmomwm5j8ye8stovmgf' );
define( 'NONCE_KEY',        'gpn60zgsoex6zj5cbbcrmm8q8kpp73rfajhmdnjtzgglfnzkkjwrkydxpyjuv8nu' );
define( 'AUTH_SALT',        'jl5fwbnrilyqqhysaboomn4sqmu7hioxfklg2aygrxlgobqpinsbnlhu2dn8yrbh' );
define( 'SECURE_AUTH_SALT', '07yshd5flxamxdxjpbkhf4atdmnciddhuv4bpiinyoluhwcndvaa0hwrvanrluv6' );
define( 'LOGGED_IN_SALT',   'kmfakgddkcxzybu5zaihdkpj7a4fvt74rk03jf7k2ipdfddt5bll3v3ak3irje9p' );
define( 'NONCE_SALT',       'hleb29kmd3eyyiqqzohgaqksj9x6gbbzutyeo2ypwxjh1amnrzwpwpfy2tyxs9h9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmp_';

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

define( 'WP_MEMORY_LIMIT', '256M' );


define( 'WP_SITEURL', 'https://mundopoder.com/' );
define( 'WP_HOME', 'https://mundopoder.com/' );
/* define( 'WP_HOME', 'http://lb-mundopoder-572350754.us-east-1.elb.amazonaws.com/' ); */

/* That's all, stop editing! Happy publishing. */

define('FS_METHOD','direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && ( $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) ) {
        $_SERVER['HTTPS'] = 'on';
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


@ini_set('upload_max_size','256M');
@ini_set('post_max_size','256M');
@ini_set('memory_limit','256M' );
