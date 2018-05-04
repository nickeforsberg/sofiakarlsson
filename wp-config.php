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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sofiakarlsson' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uuj-Mo$/,5rX[n%<QN`/xC8j13$$dFt>95h3MH&@2z-(W`O%Fdpdo[`trkv<CtlG' );
define( 'SECURE_AUTH_KEY',  'df2UQh3)=T@Ij!n_Tzo1=rDIf(fS3C`f-**?@y~>LY{hbNCOt;Auc|YLN,!-McN&' );
define( 'LOGGED_IN_KEY',    'D(@6Oc-<|E-#=Pmq:gX5gpjsGa!BcX-F0l-|dlCwy$FntdDqq3SHfGdG.* yMi{B' );
define( 'NONCE_KEY',        'zwCt Ix>+&-N/+v@E22[9%3k5/=X0?<:M>z4l[+uidA^N<u(.f~yFG6[n.;1N}lT' );
define( 'AUTH_SALT',        'UK6yu6cxSJJ#}2n9R$jiYy=;H|clH0b.YxU:Z U&~0k8Ge2>sX*%)aAgJ[V{e%~a' );
define( 'SECURE_AUTH_SALT', '>KZ*L 1qV%77?U/ug+of!|TS?/-#:NEz)maSh>b=}#oz>m$`G)!zA=r442DuaC/O' );
define( 'LOGGED_IN_SALT',   'D.(k_*-a4#;[]MS3./L(+efPh~6X/0_Iku8Y_voYi5C=g@uB4`8@K{Q5o|/-o06W' );
define( 'NONCE_SALT',       'o(*2*nekjN]L6^Ra_!hU^bSVlu3F!t2r1@3x}xK3`!~Qtt7!d5VpN-: u|jcbO58' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sk14_';


define( 'WP_SITEURL', 'http://www.sofiakarlsson.test' );
define( 'WP_HOME', 'http://www.sofiakarlsson.test' );

define( 'WP_POST_REVISIONS', 3 );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
