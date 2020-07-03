<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ss_dbname_d2ehjgc6dd');

/** MySQL database username */
define('DB_USER', '0BEMjAUQA0g38rf');

/** MySQL database password */
define('DB_PASSWORD', 'WA5s6nZJIaiT40ca');

/** MySQL hostname */
define('DB_HOST', 'pablosotrescom.fatcowmysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'YeDQ(Hxo/-)Bq*zJPf(prPlobK=TFB?^[OpZpGNrXfapDXH[$R$gahHD(!lH/ZcaZX<nVWl}jod$$_/Zk$x_uYHu;uf<W=YImzi<ye]Ysm-A$>dtWCdVlyk+s)ZcsH]n');
define('SECURE_AUTH_KEY', 'UkX*vdNG&)W$HSlS)Q]xxIzrtuxa@bLS]zi?@m}E?P[IbaA=G_]>r(WtGbUL=]Mg]TxuR@u%vCM%CC@K;BSZGp?iE/{WajO<u>jAQRiXG]WmHBchMRhL/lLOdmvc|Ze*');
define('LOGGED_IN_KEY', 'OvAi<c)[HgcekK(hqY$SFj+PkWhhP!yVd&{YVIIOhUvIiOCr?%gojqfQWAh*(wwKe}ccD!-DKP]>HWN;C}-N-j^VtNLhSPaIev)kZXeZXglsK>}*QL*EH(bbAZbr)lzx');
define('NONCE_KEY', ')+])ac@]$=&DWE*$;cN++>l/g^=<adnt-Xp/$I*RfSh!Jy$uYaI=FeelG}HYGC&zspPaoaStX_c])/SP_OgXi]x|vn!nHD;]d@HZ+Uj%lQbhWRQ?+?srUKtV_+$;Qt!s');
define('AUTH_SALT', '!LPSZRx))BTD[^Q{&?bb(GlVznr!{<g]He)PHA=RY+|hf{[&;;plYyvxc_|+/%Qj/NA*-a_R^HyDJI+X@Ki_n|&NZUkhH=KQxy-JE>LEfRj@GI?Fj=tu^BlUmMKNh<eP');
define('SECURE_AUTH_SALT', '-hB|yQQiAnXUP?FAa!RKmWCijlYbK/PWIRnxse!&w_JmgEoPwufktjk>jsr)CCd(E/ajEpGW@V;bjowOSlnaH_jb}Ua=;hWvbqTxeXU]lhjw)Wm$NV)rnBokjYk&^T^^');
define('LOGGED_IN_SALT', 'cst[?y{Q@VMkvRbu?bG>BRvIiyK}iLOzP@;$WnB<Hv@xZrmO=H%A=aYX/JGXgpwH>*V@!p&P;H&ErUVoQidK(r+f}ePrHwS^!EnuO&=<ItQf}lHIe]z+hv}cty-yBFcK');
define('NONCE_SALT', 'xXAbnP^uKuN=?c$DLO?luB$aj{yQJNdz|$@egUIdRu-C/uDS}_[=EY-ETl{%+^qNTIpvfL|e)tM!BZvvJ]VF?$mKIA>l_?Ry+M=N&Oy+av|)iC[_Z>bj(Js)zMUPv?ug');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jild_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
