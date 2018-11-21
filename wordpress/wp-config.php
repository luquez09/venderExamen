<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ZDml02;xqI#fqp;slX=PL#sBN9rX3-u%X-N}?4i;=CkhvpiZs?QG:Qwys^~g`a##');
define('SECURE_AUTH_KEY', 'o>4f0uj8_SV:T/yc?S^`rD|`p3hGQ7zsU}n?r=3RL_&(*7cHH8:/9]PNk>ds8L~S');
define('LOGGED_IN_KEY', 'wi%W-bqN!K<-#{84iLr[,$XcJvf2.V@@u.ENYJ%Zn,N`:BADh#r|0>XT2;}Szp9c');
define('NONCE_KEY', '|Qf3(:3V[J%rP%B>udLkV)3x/z./S&T0qF.$=9J~RAj|9ocWr;4aUBmE/zhSEM]w');
define('AUTH_SALT', 'H!>fG>Pl#m3~`<d4m&1<(y! 8;XWpNXY}U4gO~BEazM=8)1~HEnmpL+NvjEMFQ;>');
define('SECURE_AUTH_SALT', 'V;He|mlTrF7V@O/vNkfY$1u6c-7NYRE-^0w39vJ:3NV@5p!Ws~.EV8=wQ&j[3u?:');
define('LOGGED_IN_SALT', '2a#K5G&$@S@)PX##37Y7^>;%e!)qedd|yTL*_1ZF(+bNb[+r,d)n,Kt:L9J<;1Tq');
define('NONCE_SALT', 'M2].86{/gpv,q4wsao#jfjBQ$SRBM#I>~eL=T22`u`ea%%b9e#^-*x3)RPni]]KT');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

