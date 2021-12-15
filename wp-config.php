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
define( 'DB_NAME', 'erangamaneka' );

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
define( 'AUTH_KEY',         'FGYkmrGO*24Dr/iUVqN0v9)WiL%E2D_uZU:i}c|grUOd`~K6jJFFoOkI6.Uo^wp#' );
define( 'SECURE_AUTH_KEY',  ',[XV[Dc]-1[[JSkz(BOnr4g$nheP|_HA+Zo2xmi_g?yJ4wo-cHW>P;6z:JQ0m4wh' );
define( 'LOGGED_IN_KEY',    'O^+Eh*XC-TGa]^2DQfxz0c# jB/JYQJFE(#{y>EzZ|^%q4hhl:CX,BNcQ|`UG,L=' );
define( 'NONCE_KEY',        'bb1Ar%!af3]N(6x<M#02oeZn[,FL.hw)K^u^eo{kct9BqgjPPC<UxrtQ+]J>f;M>' );
define( 'AUTH_SALT',        '1>  .<jQc2[DX`rg=g9|F}0ko71?Jd]fX-%zf|4(jDD9,HVX{p?HI:9N}*7%ih]#' );
define( 'SECURE_AUTH_SALT', 'wrS}6<74]$x:9>s[%4~aXNqi3v:bq?*3r#O?zeUpVr{VMV4OJ:nW^|Z8a<WEx`Wc' );
define( 'LOGGED_IN_SALT',   'xkzwNuO0+35U?7Y!tq;RsP=J]ym; .`=Ip:&p#/kX%by`$yhY8hR&-.!{.2X~{e3' );
define( 'NONCE_SALT',       'MwFFY1Tq `AZ#>m?KHpo7WU,sKJwH,=b^zZ&FCLfy/@ub3Q:RShUV~|hcY8:_ J<' );

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
