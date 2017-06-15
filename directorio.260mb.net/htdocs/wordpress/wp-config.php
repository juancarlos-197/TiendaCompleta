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
define('DB_NAME', 'n260m_16685188_directorio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'n260m_16685188');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'nicefood');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'sql210.260mb.net');

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
define('AUTH_KEY', ',F!1KQEc|VB<@a0Tc.z%l?uYgQF*D+rrZCEys|,4s P6V[q{w1/Rf@g~3o)g-:YC');
define('SECURE_AUTH_KEY', 'yaI0k=M=97ZF{{1T;CZ{Svc%*]Ok]A_:%CRp9xsW](Pj<p{YE_Frd+`eKq]zH.|&');
define('LOGGED_IN_KEY', 'Q`~swBK` KwysJGm]!f]29,zK_F7zYt]VADO E16yNHg$1eY@.EX#J[9TQz!`7>(');
define('NONCE_KEY', '+ZX}HyoEA+cQtk#(g~X7D|O6qS|b^^Wwe(_1G&TNBpaJ`#isH<1HrdsZQgjue/Rc');
define('AUTH_SALT', '.&V>#mK>IsR (zCX>-2kKiOPXcw@_3G4VUOUS;]zTX);`blB8Btk6YI1l[OvuqKg');
define('SECURE_AUTH_SALT', ' .QUPWA|[P2}a`o0&XM <sO4k0)gqJ^[s![sKk_y20i<[Nz[RJifmcG)?d[Dv{^C');
define('LOGGED_IN_SALT', '6x(HHO1p+-RV[L%GET1#8Tv7wPBuu9[8GUP-{A/y!d-cc!8wjj+X#>9aSC[F>N* ');
define('NONCE_SALT', '.SKTT}9LD;4 U3@]Iu*t%Q&_=uFm.,.Vd3_Y|w-X?jRg@Ui$O#9#qztRlqPH*7&c');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dp_';


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

