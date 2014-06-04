<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ursap');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*O0:QAu[BK)IYD7_5#i$~ZCa,HhewCh}K<F%V{}Dwe*fApGv)g`I%Gsd1eY(aOdL');
define('SECURE_AUTH_KEY',  'Sp/mdGjyULt_*5&i/2W,SZMmerbsvDd!l uS2vEe~,gG;ua$}+vPgSfW]/xtPZ&}');
define('LOGGED_IN_KEY',    'd2o>86/Du~b%-CWJaq[^z!/yDurID`76i5WK2|GX>k!w|.pL7qq::AM8m8egg9jZ');
define('NONCE_KEY',        '4lq291R.bAsPCV|Qw;)eBbLEAL|Hs#^wn,IL8#QK 7@!2iH_{s}V5<n-4@io>XN_');
define('AUTH_SALT',        'HoPj/7IiGu30Q}k11%!*k$gdI4%/5+mdFy`2MGU)1@8MTX6TRex$eXC+p{)ODaP!');
define('SECURE_AUTH_SALT', '|5WxFHln))C%~MQWsZ>Pqs]QI|<u}%/+c.AQ6<Enu1Q8zk)-ZFA0s#,x5.a,GZRb');
define('LOGGED_IN_SALT',   're&klrzD6h$I#zf:(Q~n1k+.f_RD]wJ82*<DQI.ZZ>5d@ .Xqb|tzs,sUf]Ofp-c');
define('NONCE_SALT',       'XT4+7O,1`*r2l,|(i80CVD(0@WnIyDc/5tpV*hp:V)W(&eH{+sBxEh3}?hq+uu(,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');