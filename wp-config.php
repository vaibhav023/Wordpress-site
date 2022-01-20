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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '6v%0V?1kQBF[^L q~Zo(_d>r.?;u&yJXC%RjTT&!{K{ext1AnhQgLG@4IBO<x#Q_' );
define( 'SECURE_AUTH_KEY',  '(ih-!7RC)}3K#OvCLRTT(OA>?x4svJCVR:RNDJgvV>ED#P<e^3.3_uhlp*oxSssG' );
define( 'LOGGED_IN_KEY',    'lRM^T3RgPNuZX1 gjfQi `*VAJ4u_b=CJp|o]/eOnxPFx2L<zWg`(rMa(AJ.Uvr@' );
define( 'NONCE_KEY',        'qZC1A?)7  UJhli&|?v)9H,9hiC*4GkMJp1GKVu^;(}AP2;-_dU3M.AKmLV,:a,c' );
define( 'AUTH_SALT',        '#S}!w~aL=>xuGchDWV(Bfx]PigUIp4+?3[.O{^3V$.vjWhp6edZ[N@h+;m,Z~<H(' );
define( 'SECURE_AUTH_SALT', 'S4B^6N4I,*|<0SRSAmO>`8(jCK~2zZM~:m4;,EuL~,JEdkYDUIG!pWF$:c<j$RGQ' );
define( 'LOGGED_IN_SALT',   'Jnlm_~1{g{`iER,bR+2_l?;dSpo(,s)oDX{6iKqyURc4<R2O<P0r{c{sWUuy0Eh+' );
define( 'NONCE_SALT',       '_D;]xzW^+j$O@0xBqtOpdh,SG[iUe,e4K)g}WG@:-?>M;})7ELztT2GiaVYt*w_Q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME','https://wordpresssite.squareops.co.in');
define('WP_SITEURL','https://wordpresssite.squareops.co.in');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)  $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
