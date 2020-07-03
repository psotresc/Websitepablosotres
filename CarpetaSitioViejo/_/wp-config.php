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
define('DB_NAME', 'ss_dbname_m3g2bf321l');

/** MySQL database username */
define('DB_USER', 'mt1yg3OEOUt7YI1');

/** MySQL database password */
define('DB_PASSWORD', 'cjuK68020QX2fFFn');

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
define('AUTH_KEY', 'xl+*IvoBJ(|_jo_WJ(q]_lFs?_{<vM-D|l!P^<^%/tmoT|+kH]$L-X/avR;]R]mhu]mQt!=CROWNnUh?xbWVY;ipEs@dCVrSbi@c/>nRH;VRpML!dPAv%]Yf-)zrmX<t');
define('SECURE_AUTH_KEY', 'CaH[u-pVACV(dZFeC=iFO&}si(&jch?LhXPwprweJ[^?[+HHIzTA>gYbGFKGjAL(FirXVAHs%/-[QD[CLwt*czvnagqfy(LY_]P}KXtvOWE/B[wivnzYiOCX;=V{][Jf');
define('LOGGED_IN_KEY', '/IMxeChyp-|%)bmFHV_onYeDcJ}!R_-b(d%ZIk)yjejXVdQf[CD?kg{QCdtXUOCzw&DhsbZ-^EB;H@L??UOVMDXemEKSPLC|H|pBPWiiIKck+xmr@>a-yzH$^]N[JX(;');
define('NONCE_KEY', 'j$Z_}KHNG}Np?W&&&|KGC}ru[R}afgWcdG{&}KtN}z%naT<b=>W/DG)F^(&L&Gwji+rbHkF=(+[t?Rw$FB;{mB)V;vP/?e(D;AXWGr]Q;VJ!&udJuqrNb=/MwF?hVV]&');
define('AUTH_SALT', 'M>mq-ZN}TYea=nFmdU|v%FB;J{SQ-ckdwYEw[L^ql);)jj}^NIJs|<E?d%}sw^q+Q|$xX&X^w]EH<sreZY{pWd})iH/KxAfG_uf{c]wpI(wftsutGHV*_jzs]GTn=)cs');
define('SECURE_AUTH_SALT', 'wy-{zHTsriuvw?@{Yfz)DfcojfUoo_xvwcQKb@ab{LL^-CUNp+^T_x/^T+c{ae^[v$u%CEfW>xL]@r<+/F/Y+]>ixjEuqpkRK=OpGHkWj_aPWCV=e*DEVB&GeaN>Cesd');
define('LOGGED_IN_SALT', '{oijfMOLg)L]mErE%K-CiFWUFIBc<ZC}]&Z&rFj<AgYFu^-T+TK=mlQ!KC_vCqoP(Y{j/&SGkmhs&?xej(t{nB-]ZbBZ}L?*Xjr<Z=y=S}U;+-pfymTnaXZr&TmvPi(F');
define('NONCE_SALT', 'HaLCjbdwh%yAV{tpT/mwA)XMFty!+A>?ytY;uHiJDpN{;tFBk|!$SnGJ^XJOZQr??w*U{&NIAocdiX|-QLxa?fjw@{oV%(|*P[TE<?LK+-OEr=tQpimr!>G--&hpiv[k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gbvh_';

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
