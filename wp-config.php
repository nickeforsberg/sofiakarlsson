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
define( 'AUTH_KEY',          'duzm 7TDE#XE^^G^zydPMGUa2/3wh%(C9g.E(fB +rm<ZEEdl.psxoDu={+|R;!+' );
define( 'SECURE_AUTH_KEY',   ')&XbFkb4%h*L7Ki}+=GXe,L]J>50+EnOiq2Z=Z]v lPY;1,MoIqkLGr%).XjAMrJ' );
define( 'LOGGED_IN_KEY',     '(_b$ewlaE~C#UFJF1J!r=VNi5rH0a)khG*56f:MdF{47a#p$!,{#*K-RjU_utsN~' );
define( 'NONCE_KEY',         'VsbvDh#bF[&0p=QAc|q*$hfPXGd2EgD_4D<Gmn:0ecAE[kJ_Czb_>hm1?S@|m?[/' );
define( 'AUTH_SALT',         'K|ej3LUpcaL%1kfZ#TTGQu[EN%[98k~nuU 4N.$A~&5(GseIa+=7 W.So_/`3&O>' );
define( 'SECURE_AUTH_SALT',  'P!9mjhhXy{%%EXyZ4Mp33gNliBapj}wsRN6(E[~w5#c6G=+Ng9F/)YjQ>!,a#RVz' );
define( 'LOGGED_IN_SALT',    'zb;:!%)MzqYQ!(]i2FkBFMoBGvdJ:>g1F4R(4^d#}:cEF6ZxU##3N)2Sive{/fD|' );
define( 'NONCE_SALT',        'XyFEn6C@pHGH_$yfpqp8Fqh&jT`!QSTRNl*-n->hf7WkNY(PDGF`*-9ooZj!Tn1H' );
define( 'WP_CACHE_KEY_SALT', '$I8XF/xSY3@b]M+*.UuKXl4nK/cY>iwm~BhnjM+|zQuFG4-C,bs$S?mWoJ.WB_0@' );

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
