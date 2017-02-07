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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|d@.r<^]!P4?Z(opQ/7sC53LT><|k`N6FGy|&++yy!CVJ?,5~?s15pC-t|rt#0*W');
define('SECURE_AUTH_KEY',  'xZrHWg(A(C8!vEaXm;A6bz,IF@<Le$|W*]4/&#:+&2xH7%r@$ZD{.Yn.|,^}vNC[');
define('LOGGED_IN_KEY',    '^or9XBtjB*6T}lLhWu)oiNkTq7!#+N9e+)PBHVeI1-G!uP)kM@MjK8ZvI!D|[uT~');
define('NONCE_KEY',        'YU|b +uJtech87|4.v9*u]4aE;T/7C7r=[Zp*M.o!IBVE@Qon/|_+ ~>&{@*|L(Y');
define('AUTH_SALT',        'AN8UmPnk-`1S~]A]V^|h?qjsM74b%tnQm8igwWP~|:syYRFQM!?r1%/O&gWf / C');
define('SECURE_AUTH_SALT', 'M:jm|g6,>em}R>vN&i8YZNZkceWO,y0s`n:d``iw#^&[<?U-pC$cPUhxf-lbsp,n');
define('LOGGED_IN_SALT',   '>~J_A^lA|c/u, ehPX`B3KMLY!x-?^Hk./]3LN}c7<86WUZ G=@B|o&d-VV[;.vT');
define('NONCE_SALT',       ': 9L{U#K0|iSL7S-t{0j]RyHd:tGM,3p|)3K2t+FgNauu{#!@+gM2Z:a]6E/$JFy');
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