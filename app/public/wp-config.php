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
define( 'AUTH_KEY',          '0th$ntT?@e21k&XKg)iKwdyJvQehoKh~29Dtk1bXw)n]@fr-=Mj4Pf;:};}|Q/Fg' );
define( 'SECURE_AUTH_KEY',   'btohrRrTlFr~&es|p_Q23_y*-v^BH_8q(+cc7SuK2A92Y{<L.W[YIpOQ0SQ`Hn27' );
define( 'LOGGED_IN_KEY',     '0,Ugk<tg$CmG|B~++n$xU=&xm&I{~8%APhIro&!R@i99`+TR*RxyW#Tp1^IolBmW' );
define( 'NONCE_KEY',         '?WI1S_N{E,6+[c/K,?m8MN_fyt06(kY:G`&~}iJxi-{0g0xBL_H%2moGS-pprCj=' );
define( 'AUTH_SALT',         'Y(jddV/#6&VMFwRlyJw^}aOn/#I=}PmY&.(HJc7I0;{7g%P48~Id*O!pBDeK~YYC' );
define( 'SECURE_AUTH_SALT',  'L}88;)YBmqaUUCZ8/~bWWL>T_S.4f&dueQGSM+pE?o88A6|Qy^X3@ngSlIM{E%PO' );
define( 'LOGGED_IN_SALT',    '*kw^^iKj7SC9%{,hp-_KV,CXUJx{FN|tB(x!9U#Kfmii~H3/3hL@qz&$EhswX9Ol' );
define( 'NONCE_SALT',        '-FE:p*cy}@MZ&g5;08:83&LMtBmIGSY-<vz3&}}Uu=C82u4).Cy.lJ[z<p,DRIo-' );
define( 'WP_CACHE_KEY_SALT', '^y}@:kl^aIlYVfjZ}`JqX|,)bP+gL+QJfIT|[mZ(MFLr_:Xq9W4gNZ^~#NuMF<bU' );


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
