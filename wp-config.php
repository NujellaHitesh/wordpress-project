<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'hitesh2004' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-db.cpsksymg09n5.ap-southeast-2.rds.amazonaws.com:3306' );

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
define( 'AUTH_KEY',         'E+Apx @>/zf9U-WoT@!Z58.JBP%Dt#Mmi%r#[7aN;Hdg4+zw-Y[Rnm:<gOmn+~Rp' );
define( 'SECURE_AUTH_KEY',  'C0zqU(pljZu> :234ZOSE/7ECW#Yaf@%#mIZE$_kTCvor+Ke](5*Mv<CMVq[VU*{' );
define( 'LOGGED_IN_KEY',    'BKU>8lycO8$C@dPZ#x<Y(.8;ZOL4t!48Pu+:]lxrj/[.)sR.a-#gQM4[B`rQM#P:' );
define( 'NONCE_KEY',        '[zX$`/sR=N7*Sr@[]d.9#Mz}w tjT}xWL@vAn>Ar[uiJN W/7bKsE5`&@<oUbU}!' );
define( 'AUTH_SALT',        ';9|p=?Bn&UoR|!1~e#RN{sf;%|_K^XiBz)xYY8}KiZT_}&P$4S#Q3F@WLib{4+$K' );
define( 'SECURE_AUTH_SALT', '(PFb0= fjON;lP/2x(R5$$&:azy>=CVSEi(3O`*5`f0*,3OOz7cj!J(*R2B0s_KW' );
define( 'LOGGED_IN_SALT',   'M298{h~Om9?]f[7`9`RG$-5]-qSb+}oZ7N9;6og:I;:fzjkUdvL}+[{vFqd :F;*' );
define( 'NONCE_SALT',       'x69Ub:fNKu9~([|-%Tu4UI>[QCp7U[BlD#5Vi>p7nUcCp,G P9Fn+Pg*7$+EN}Cb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
