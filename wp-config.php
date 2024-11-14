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
define( 'AUTH_KEY',          '=E$+2hylJ9B`_bR7^Z7K;NledSA>/C3r<ZTqwkWt}:<K$hSw5,i|!g::rKNzWh~?' );
define( 'SECURE_AUTH_KEY',   'q{m#IzQ//}&b~`);3sAf|Jh?v{_(h9PDBh=#mag{=Yb{|Q`*BO;ANPa>QKzlqk3U' );
define( 'LOGGED_IN_KEY',     'v-&u{B,%7B)GiUua?t;$/=-xc@s-IqbyE}m?-Y=$U~!,:fWqOk+~=vK6E3g]Ee 1' );
define( 'NONCE_KEY',         'C,eU]04~ZZb+|0153x3Smdl]N){@Gl~dru~L6a9T`mR@=u.5C8tyV,b^sQ1;MiFU' );
define( 'AUTH_SALT',         ';Fp?xTGr:?E9kJ,)(}$?z@2C1>dz! E!&>F.vNJ~_z{`y,f53g^PdvTU<Nc#{%;!' );
define( 'SECURE_AUTH_SALT',  'FvyG(%-klCH::Q;@<|c|b{HMV+[^)Gs*WPAuE`fj+(rkq9RlIfn2y=V;(2=)F4D^' );
define( 'LOGGED_IN_SALT',    'c5?ufAH!dB-}31VTg.YChq.04O7D#3I_BtBE$_%+-[z0/}~k%cTdPbJD`JoNQ:Yp' );
define( 'NONCE_SALT',        'NQp:6_P|n(]NO`1C@Ez$mFK@]gqz$d&h>Zz4#nMR0lo#og0jcY6ti-YTDYkF0:&O' );
define( 'WP_CACHE_KEY_SALT', '(VM4Iallz^VN9`[gx)BnG/QLUSqVRZ[v9)/S{pw$j`@i-)4G[;&3n}TG9gyhP<o!' );


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
