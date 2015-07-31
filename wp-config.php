<?php
# Database Configuration
define( 'DB_NAME', 'wp_tjcmclq' );
define( 'DB_USER', 'tjcmclq' );
define( 'DB_PASSWORD', 'DRqs4UHxn3KhmBkzFagF' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'w~=7_kHBk&pE$9QHx1SPuL8-TV&|etx.PFgpQ+{sYNXGMA>LXT7S5;meT_!ImScx');
define('SECURE_AUTH_KEY',  ')}9-(lV=:Q#Mx*$jWw=LkVH%=Clji/VSClmTroE(0<_06a0%I~(%4(d4RX0+X|  ');
define('LOGGED_IN_KEY',    '5~?S9P`Hwr]-3qYwz`5K8u7;7W+|iKCt,Dj?SELorGG,`0aB*wC=eQ+@*[LL`>;C');
define('NONCE_KEY',        ',%HXu7y8= Lwilc3)`fDf-@X<|uAZF^7]NFqJOUij}j|@jQVEHbkOW-WX npWN~!');
define('AUTH_SALT',        ']}t=n15eV%.i]~Rk =-*ZBR0j7TDYL-S+B=RCHCET!ms{k]MHU2<{@QuW/?9t+B8');
define('SECURE_AUTH_SALT', 'WMTXus+7G1`rD8^Qs-/c}K}VWSuFGl<1uHV:vTAE3Q=*RP}-7([*PO/Iz-pKuhU[');
define('LOGGED_IN_SALT',   'iG[DvCQCf-dT|Lo4;Fu=u|pNJ;u6MkBi}f|Q,~ R%W];?LL=u6[3kTRUAL,6vcc>');
define('NONCE_SALT',       '?3w11K ?4^~p0.A$|kAV=qk=]3WS%4R_0sw|Qx_YJOG%xoN+aYI.|C_b3$4Biu-*');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'tjcmclq' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c7c2194c22701865da8db7dbd6f55e2b8332ca03' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '40291' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'mediaupload' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.33.18.237' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'tjcmclq.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-40291', );

$wpe_special_ips=array ( 0 => '45.33.18.237', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( 0 =>  array ( 'path' => '/wp-content/uploads/', ), );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

define('WP_DEBUG', FALSE);

# WP Engine ID


# WP Engine Settings


 

define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'tjcmclq.wpengine.com' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define('WP_MEMORY_LIMIT', '512M');

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
