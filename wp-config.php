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

define( 'DB_NAME', "climatec" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '=^X+Z ~:z$;xWW6gTxKLloy_gS!4|;8DTdF$bII7g7%1[f*;Rq&{n==2f3D]}hng' );

define( 'SECURE_AUTH_KEY',  'd4?_1y]XY}`k.,Q6U~:&oAw.@Dyw %v5?f8C4c|l~zD;T==~y1_|?H}*+P|k/fw{' );

define( 'LOGGED_IN_KEY',    'ubLY$bP8HMbH;YL>XtS1tLQ/Vu:W2AhG,AyW{gUbLs6ZEeu`PvQ1a;c6IJ1J>EC+' );

define( 'NONCE_KEY',        'A []?lkKz@pi5{>VCYaBJA^w|mUfNdefAR/]5#Z9qmZPFOQ3c>/yk{/1o>(+,BTL' );

define( 'AUTH_SALT',        ';>q/G9Lb/>.dsxc.{62:TLx8_mNusjP4tp-Js6-wHAXfe`}1+716MVdi8?z^)^tR' );

define( 'SECURE_AUTH_SALT', 'JT&*of>{?r5Ctr+D5FK1JhVM@g<0<Xcy^nz-(+BrO!B|UF=:bE>)uD_A:ZTzL_eo' );

define( 'LOGGED_IN_SALT',   'N9[=J`FU,jWjZq8gB_;r)HZ1n>.Kcf?dX5ueC5EkuaK]ptr:76/M`V;-?>Ww@Xi}' );

define( 'NONCE_SALT',       'cF,O&MOPcE1f@Bi-n1^9s{C)~]D>f?LAA/Ozjd8 `x;f%V99Vmdt]:kNI{Hb*?2E' );


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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

