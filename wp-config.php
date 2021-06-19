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
define( 'DB_NAME', 'freedbtech_wordpressstunia' );

/** MySQL database username */
define( 'DB_USER', 'freedbtech_austinhappy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'au03zo4db' );

/** MySQL hostname */
define( 'DB_HOST', 'freedb.tech:3306' );

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
define('AUTH_KEY',         'fHCo0o)54jE!|re%x|`(5rJ?i_iSTkpRZc#dxuhHo?%{0V}MH}-(!8BK|-m[/8+T');
define('SECURE_AUTH_KEY',  '@qhwpv0>qh7y!n+D[):i9?p~mHYS2xBjoqi$FnHf`TATyZ3^C|di7S|H+W>n.RN|');
define('LOGGED_IN_KEY',    '(l!A`dTms2=H[a0<7Ydof|rtF}au`G:oO|WqLHyLZ+5{M:OddK3-NBOfUSRkC[J.');
define('NONCE_KEY',        '5wE9J@Xcf7CNFT>PwrP6Eg1~vZHCi{o[30`,T[]`Rvf|D1ZBai3+fM3RGj[1I8H(');
define('AUTH_SALT',        'p@]3>DuzO5:IB:]i(I+p8n.Xva3hO4IEGE@,8J{S-`[1GrOnU*i3EK4ZjmB*p*Qm');
define('SECURE_AUTH_SALT', '@wv3fkBFgmV~EsQb|X&5_P<DS5GN2x}#qSU%^g+-vNC.MA?=3e5YD .D(ost^*XJ');
define('LOGGED_IN_SALT',   'rb}AbQKiSVGdB~m3]d,Z|t$mZzwGdy 4!S2E,KkF{n{*~8n,>hhm-lh(klYy86r&');
define('NONCE_SALT',       '~((khQo(2OhXanBMA!3zR=`S]s,-6==DR|W)b(y#&PuD-l!xL/@DMNimL4-+>D)s');

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
