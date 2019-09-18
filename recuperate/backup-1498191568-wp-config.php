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
define('DB_NAME', 'carmenm8_ss_dbname3c4');

/** MySQL database username */
define('DB_USER', 'carmenm8_ss_d3c4');

/** MySQL database password */
define('DB_PASSWORD', 'q0nfXurvmL20');

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
define('AUTH_KEY', 'rb+G&FK%q>bn(GuO-QB=XL)uh*b|Iyw/)uf[X+sZLC=MxQ(Q$la?Wf!gU]h-VQ<be])bLB!P/{O|sxtqW}=E<OA+XvzK{ulwpnotdrh*d@X-u;UjzL^lbHg)]q@_MCTI');
define('SECURE_AUTH_KEY', 'i]-[lIMla*O(=B-glxB?p^RuD&no*m@PhNWp<tKr_^{^Y)KNQ}ZhEqlbrn(Zbv_GtN$wb_>a/Yg)lwkKcmw=rsV)Uf/P_Rxb}PwV*HJi*OoA_q=?oCSyR*tu>Y/s?BNU');
define('LOGGED_IN_KEY', 'V<h?flK[ApcDwinoVbjnlv+DMyA(ma|KncFqas)HO;=IIZ&IGPHQT/njd[Mi[cfZgYICP_>D%KNxlJoYtxeITl{(yVrBGE^B&XwI^M@eJ*dirfW(;mftU>P??tE@tqoB');
define('NONCE_KEY', 'bcl>ju&+Qj+&l+-=/ySs=aFE^?^XuLLmAd&{u&wdW|{BUJ_ntdfyrcjYJ/BDvkSwe+hCmSsQtP[FK=?qjU(QV|@(wjJ%Ts;a?lb(Z(d|M-<spYJDlps]FO=au$_Yv>?X');
define('AUTH_SALT', '_/HAeWxT;T=cq$}xxQt]g>w}j/)EjaS>!NvAQ}nvfksYC]QSp{oa&n>/u?r)^vUdZh[k?Fp(XTfG?fMmyIG-TJELEGd>aX=cUz&JM)/YXuqWNGV&zQw;x?NiXtkz_k%b');
define('SECURE_AUTH_SALT', 'WC$pMrC;HuGWr_c*io[zL/roVw_&w)dAUu*hJjpcav/W?=K|i&<BOA*w}p?Iz_]$XxEDV)gi>ddHuidP<p]ITuEX]_pQMtlm==II]knGFGnMN/Fljt!)_ZR&Tm[_L=|k');
define('LOGGED_IN_SALT', 'GjEcU(q@c|QM*k)/ZQN<(d{M?guHzvV@f@M%oRM@Jv]r<WMXGuIY!FPt-*<]F}rMwl{Pqt^w%&?Gj$IrPzO_MPv=^$K[_MHn+GEb%)j?{ULZtZ=b>kXWhokyXWNddp*I');
define('NONCE_SALT', '[ok_yo>>aep=Gjh);WXR&|aQIGE)?AAHzVYQ-Ck?Uz}B|kxZJVsgzFU&;g|Z=CbpL*DQK_V@jI)OMg;JYBN^HsC*_dlQ>[]WClHv>)Aa!)mDg]rbbY_)>[S*YSMzv*n%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nent_';

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
