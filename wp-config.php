<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'hotel_des_galeries');

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
define('AUTH_KEY',         '08i+|M_uUc:+!/uOJ1S(6W^%LY/FRx2((3Whm^q~VHtHw(+-?$<1kxb!V]osqu]B');
define('SECURE_AUTH_KEY',  '/D|u}/:Bz&kW$yixs-j|I.8W0%JaG!:FB1,G{k=%U?}Gi_lm3lpH*fA rKlIV=f%');
define('LOGGED_IN_KEY',    'km)PmGdJa&pv03b)1 &21{/~G:op||FZziCA|:?w6<#Hp;G1gQ%Ah9!Xcy:Ei,uN');
define('NONCE_KEY',        'p#g|^iH-V:5M`fmbpk8BCn&6M(l*_Pg<0:2*;^XW_Z##<@;2-G9<%lfEX2leG-$E');
define('AUTH_SALT',        'T6%e-#Ah8O{|G6`4w$H+lqJ&%! |#7sP-k22]{pokdfr)qGUu.<?A<(I1&bX`)^/');
define('SECURE_AUTH_SALT', '3#d]mD^v|>On5}hr8Ty]`*1?=lkm%;$#HFh*6_Tc241OFf{K~y>k}B,EoGg4jkI-');
define('LOGGED_IN_SALT',   'PnkA%_n_=_>2-L-(304JK[J1Q90h<*;3#t^)X-r0Op [x/C8aBMsQ*h>H [:Y([:');
define('NONCE_SALT',       '6Pyf=luQ/f?T&6|tS_[X_5%`?Th3}gihc *h&NeX/1!%yjjl[*n-%#qT|*zzZIse');
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