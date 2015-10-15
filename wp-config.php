<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'sofiakarlsson');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd[EDAy~slOu+V/#;-_9FDXyMaB/nW;?x.6auFoQdr:C|?+&R_ksmf?DG7V|1@h O');
define('SECURE_AUTH_KEY',  '3<,?b!:6?|Et1t/jgvWnnt+e?V|/0xKSe(tc= OkGSv5V/^w;K{Rt7?IiKbcW$On');
define('LOGGED_IN_KEY',    '^[(k|g[,>=| ]*W+v==.zvWvou jvBT+Wi_X*3%3^IbD&?Y``B#=mC-ccIEo68o+');
define('NONCE_KEY',        '|VuH*<^@A]Ld[QT*&S-6x>Gk|2R0pDc$+${:|F1A+TI^]@a+=RcvdwrBcp6VK<||');
define('AUTH_SALT',        'VO}H+$Z$5,9qM0A8AJ`cBf/xe{K>L|*EgPW~/L[nL?M4dQ9gD}4A,*Ag*SR|*|#M');
define('SECURE_AUTH_SALT', 'T.NA!R+so3Lt$d:}grb^SbWm(t1>7pVLWR6I2Y.LxZRFV2(i!5b(:b}-ToG.y9vf');
define('LOGGED_IN_SALT',   'Pe~-d,2-TCh15>.48HGcKV0!G-aOq6iu2+>S|:GXu<}Xv`C.j>1yd~Df<T}P]~9-');
define('NONCE_SALT',       'YW.=C2enqB/[W8+Uk.V@s,EZb94OCrB.wWl3W]Y(jNzMw!aQ%-Fe sk{|*h,K k]');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'sk14_';

/**
 * För utvecklare: WordPress felsökningsläge.
 *
 * Ändra detta till true för att aktivera meddelanden under utveckling.
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG
 * i sin utvecklingsmiljö.
 */
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');