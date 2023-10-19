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

 define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
 define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);

/**
 * Include Dotenv library to pull config options from .env file.
 */
 
if(file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once __DIR__ . '/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();
}
if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
	require_once dirname(__DIR__) . '/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
	$dotenv->load();
}


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
#define('DB_NAME', 'wordpress');
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
#define('DB_USER', 'root');
define('DB_USER', getenv('DB_USERNAME'));

/** MySQL database password */
#define('DB_PASSWORD', 'Winter2020');
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
#define('DB_HOST', 'localhost');
define('DB_HOST', getenv('DB_HOST'));

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
define( 'AUTH_KEY',         'rxipnwwksu7hch9csnrtqveuqe8rsbdf0jdrpsqiv6juczz6ohcr8fl8x1snjshz' );
define( 'SECURE_AUTH_KEY',  'fjeia9vnfiou1mc6mdtfsskhbqwevnrlvutywfsr4foifecrfyhutndm5his18my' );
define( 'LOGGED_IN_KEY',    '7lxgcaowee910otdq8nhkx4iusdsqma7oopegyocgxlw2lb9vlirrdu8xkmpdta2' );
define( 'NONCE_KEY',        'pj0ca1fvbxk8fm2iu0wbvg09waxofpfbbykhemguhl2kwcs0x5leeiumxsygte3p' );
define( 'AUTH_SALT',        'viept4aama3ftu7ykds4bob6eojjfxony4eayfkqosauj5phmvxodoxemx8nquuz' );
define( 'SECURE_AUTH_SALT', 'xqfr9bgbqvhq6keided9w2a3hnts6ndud2d8yglfb1wllgwbjbhxpg4fvqfdoadx' );
define( 'LOGGED_IN_SALT',   'zod0plthjwehxzqew4x6sk5uxwymr0njjlxxskbsny0ijcrtfcdm3inxie9e2ibx' );
define( 'NONCE_SALT',       'aaxdgy7gppdzpbeogdnn0eqepexnqfaonr20pqxjpomswgeqiytl1bafn7h3yk7n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7g_';

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
