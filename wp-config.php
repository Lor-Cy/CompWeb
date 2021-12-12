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
define( 'DB_NAME', 'anatdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'd&w$YN~#2!IK`Y/z3HP4X$S(/46~p}i<&&XGpEzO>o]i<bUw}OLjsN@IuXMR^*]9' );
define( 'SECURE_AUTH_KEY',  'swz$aZ_p>3R:2EOp]6e|31L<I&Ns]uM?X7^EW=2t&k(8P{bGQ`QWzZ36X_02[55C' );
define( 'LOGGED_IN_KEY',    'iPlSV}%8SnBw|%=/sq^Sd[ 3dzBWppP|3YN,G5cHS5JVo))Uj<K#@_#}ym/6x]Eh' );
define( 'NONCE_KEY',        ':LU]8HY`Xf#/^2}rW.IY9G2)Q$XGfaYW#6PcXgs|iZqOhX?J{$Jq{*~<hJbT1QW0' );
define( 'AUTH_SALT',        'iI?<u-51`g-x0cp: 70Su-gP:8gXC tQMw CJgj,,7B=$A0bm?U=F81dr2aQ*moQ' );
define( 'SECURE_AUTH_SALT', '*D/82gg$`! PzmnXTB{uQ=AL#i^uVb[_JmYc0:=NLzA.>5,#,8QMdMHV^n!&1amW' );
define( 'LOGGED_IN_SALT',   'WoUS[0h0xH|OJ#kmh]iX!~yqMH>`/,v6zJN^yS)I,.xk gSoTF[X1u+jO/K_SRc.' );
define( 'NONCE_SALT',       'PI7H@t/kDkyMJwe*^AZRB)D?&x=~cvp[p36=%&!([ ]32 /moxG0obw8p2H:lc_1' );

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
