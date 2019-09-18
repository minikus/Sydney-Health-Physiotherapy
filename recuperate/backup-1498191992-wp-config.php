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
define('DB_NAME', 'carmenm8_ss_dbnamed9c');

/** MySQL database username */
define('DB_USER', 'carmenm8_ss_dd9c');

/** MySQL database password */
define('DB_PASSWORD', 'omSLFQkFzhST');

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
define('AUTH_KEY', 'DR)()gVwv]NumuG_Mws(P&n%OC^UlhsD|JKi$D*&ehsUI[@*p<|ahf->p;mo;zk-HGY>/MEDezgCyF^xJpRs>u&$dEdPk?[uU&QVtG{C}V[U({y+MG_hK*FvR>u}%Hj>');
define('SECURE_AUTH_KEY', 'T;^BtmJvP)$Zz^OI>a}ypGtd&iRvR@a@Hikri]Er[wH{WF}d@]wryjUXyJ_hMv%IxHE<Caf<[Q<-)yNK%x}ROE;mXD!YY)Wle&&]BIqZXzj*=w<zaO%@hXwh(}cImCB|');
define('LOGGED_IN_KEY', 'J@wead$eksJcn(wgqnpG<k$$z-?)_iNMBF*(P%npMG(eV{)ovNvSMO=k-cUOt+WEKq?z<V|w*xsB$;[XW<%bp*UjTchKCRxF*nouQ!R)[uq=yYUGRBwHHDTH}T&>>Ocv');
define('NONCE_KEY', 'BB]Zf_/YGije)!A<_K>VTmEbTJ(Yzh-oVQ(&M+&&x%d(EUOEX?EfjmZrEuLLxYZP$t/vk*s;(BZ]IvB^a?kHK*=tpR*SktHy((]QOqn%sRV%BF]&UqyNYD)EP=d+(Xu{');
define('AUTH_SALT', 'Bpib?!;N$Qk@a^]cep+JxvA_cC;yAZZ&;sgkH^EmEEPlboFT=nzu}fK]Q|vMudP*DOiVmwkm*M*iIW)lO&ijxdfJhObz(V<x;GJencUsRA(V%(JSUxkKBKi@tht$*Vg@');
define('SECURE_AUTH_SALT', '^bciHar^qhYj+S$Q+^nNaX}Pp;HO(xu?GW-jMZwW<-yxW+}Js^UfeGX/gX&WWHVO]si=H|r/jMo]Cnb%/c}dOTRtP%v(CPtY}&T*t%Njlo+opyVZ_)y)_Qg@_@ww!?}T');
define('LOGGED_IN_SALT', 'UJ>YT[wf?$VjJOZY&M+eqO]>RAIJR;tCL!k$(>y>Jb!iOP/{b_[MNxDR!PcbXnKN{gR++HWvZg]Wkk=Ll<hAT^)KUmt&<r[pwlm+qF;x<@^{x=atX}vd^PH|u|{{;?X[');
define('NONCE_SALT', ';rRj{l%A]rtu]iqYu^l^%+_RcZ(zPRDZvu;-a!pj]YBHfKg=IsLXHx]W{XV>gDtHhu>q^dADx(jH}[P^v|^OXRMi^_(qYmLJH&g>jvoq>NyiKGSEjcOHDzBTdr<n]&bW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vjdz_';

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
