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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home3/carmenm8/public_html/sydneyhealthphysiotherapy/physioblog/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'carmenm8_ss_dbnameaec');

/** MySQL database username */
define('DB_USER', 'carmenm8_ss_daec');

/** MySQL database password */
define('DB_PASSWORD', '9E6erbQACfhs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'oSQb-ECC/G<HxWV->Tz+>]LHlw_JT)NtcCMSpxSOkh]V/w[kJWTYU]rZVCGgNobLU<;(Yi$-ZhRA)ymzyLmWvbbH<d%k(]*T[J*$>zbr$NRhY?j^zWvz*[?tQeygqYAW');
define('SECURE_AUTH_KEY', 'y;-dKs!LGVOZzBhVuiWw|?f?X;zke}YX(NJVal(VvgfVMjm|d^p$[wxah?_w$V/t<nshD<QGu?eY<gG{w[pritwd*{cOZ|KoC[|y-F[j*W!/[ZNS(V?r&IzXWBuN_<GT');
define('LOGGED_IN_KEY', 'Ar|o$bLa}Pw<[rk[FFIuaYy*J>nfj<n{YVA^@dyNfFgw;[E%WOhUT?>uCazE*GYX*DGEhs<O}higr|={kd|P<qtv([]gx$r;t>A)ck/GNW^&uZmNVOKcBUUJe;!tCRuA');
define('NONCE_KEY', 'O%cIS%g^iyt?EBQce^yDHVW&)Ik(uV//_N(b/zGN%xz>FDFBSkXdfuut@_z^rd_<ilqXfnyb[mK@vdKW+moNjslbyD+Mihftj$u<azDiI}uGjxSAH(pKC%pb]RhBCH-Q');
define('AUTH_SALT', ';js>NdPld%^kDf]m|xwexHeSfN[^xYi?=$LStWAspT<]ba;pLMpCc?Nvsikfb(y*C;xJ*vo?]/<U$RwY*q!Svk>I]LDk?Pth_vk+f_v!jrm][mWMO=oP_fs=+|SPuczA');
define('SECURE_AUTH_SALT', 'sUIJAE=BUFA}Fbf]VU%Kd%MOniV&I_S@SMst?mhR_w)d{xX[(e=OWcS><NXH*pRtL-?q-HN)HW-V{;EvpzgR_%DyzFzCq%{o=<SKvVP]WQ}f*wFZVwYuxlUBU>D)JfDO');
define('LOGGED_IN_SALT', 'Z%L/cmJExN@Y!|CN&aEuYvp[fu%Kg/wIftSejyQhQUcyhR@fCPMGlT_>@B!c)?<Rs+zNb/IdR*AqBZMufDriE}|)jSfuIcCMRGPou/LbaKw}!K/&sEvX%Rl{JlDt!A;Q');
define('NONCE_SALT', '>O<up(Ty@xy]^HrEY_LPNWZ<uzWnVCUlu[(ia<*uo?ilyP%dquGRo$(qzdo@=[WVlEOM[k<%WcRZFiuR]R/$F;*HF@|tBPpfd;toF?tpM(/ZfyxiJlgd}NlsVSfr%}DG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yhxj_';

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
