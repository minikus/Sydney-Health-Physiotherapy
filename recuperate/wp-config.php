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
define( 'WPCACHEHOME', '/home3/carmenm8/public_html/sydneyhealthphysiotherapy/recuperate/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'carmenm8_ss_dbname398');

/** MySQL database username */
define('DB_USER', 'carmenm8_ss_d398');

/** MySQL database password */
define('DB_PASSWORD', 'DmJ1MHLsD7xD');

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
define('AUTH_KEY', '|CTM?j|[SKaZ>i|K$lrKi$_G%BTf^]swg!Q$Lfg{GYDzjxdg@]sjVJV&lJVREzr=?Xlv[J[;NZm{GU(Q)<U&WGpD-(T$>aJ|w$WgkS(u-&^qjSp<w>xkroMxQ|KF=blD');
define('SECURE_AUTH_KEY', 'JA^R+MxkVNMRXpbB&H<PlQ&WFRFxRvGw_[wk}+Ku]UTM}&d|@ZR!/vE)?!*vS>PDqk@(G&+Xn[OGFKf/axnBJ_tRN/h<|-c%uIPFLQ!=wV{z+V@Yzg+-qNIsFE-aST+u');
define('LOGGED_IN_KEY', 'Kay?=H[jA)OsUIAhQ{=uHsj)eo<TnVSGUq=%n@FmG)N_NOO]g}y@CILWloVY]SFv=O;xOC)PCQRw;$p@T_x(VdCzdYYldkcFYZV>W!H+u;yvT)pZADR[$U/?]sCDvosj');
define('NONCE_KEY', '^B/Rv_[*BuQgWR*/g]LfmbUseY-N{R{F_|tUDNNYmZLm|E*tqgjPHgRMQwh[iB(SM=lnH/_hjuV*fc@$(?qB;pi(UPn]SLBfvrvN@}[M]!ITgdlWtr%WTDiXvn=O^[q)');
define('AUTH_SALT', '=Afwx;uyAVO?l@je|&b[gntz{E%dE$gytME;zYHYQVb^V)qh|)uzo[>+YYA|udL^-%zUEzndpGU;Cmh/OS[%h;(Vsj*i[yL!Zm<mYD-hwt&UD;IvG;IaXfbbA;w|IjMr');
define('SECURE_AUTH_SALT', '/UsS/@C{CJm]&Ew{*tqWiO]QAA)oxNBw}m(dYb/a[/eWn|wYu=bc|>kPLvN%@*dJ%}Ex</uV@KRx>kTF]@T(;Nhaa)cWpblXr/aFBkJm?@xLwg}j&_]bn[pjKYB-cO*-');
define('LOGGED_IN_SALT', 'Wr@&Fw!{BoruhCD$X|lc]rzz&PNH@wjPXZw!H&Cj[*S]Wgu]>j(+FpB);}]wGhUTBioZAWAHqGmfEgnYJ!kblC}FCCfwAXGikz)aK^fBh<RzGhbl&R^uZrJLFpv)a[<T');
define('NONCE_SALT', 'D_c))kVhis(^b<wC={cEfld!S>YRN*nAAaAwtoMtukLk(GKyO[aj<{UpY}?/|Q!YI?j[[ent/&sS$tOx}(PyQ&wnSQV=h*{bkuUJ?B(O]xWyHSh$sY!oDAxh+YhN;m)D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rmib_';

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
