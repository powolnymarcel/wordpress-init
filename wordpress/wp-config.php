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
define('DB_NAME', 'wordpress-init');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|3O<mU>q#N>gvbut5%M`3g[~+8T,.gJK[TC^=Z}Z1kGBN0ExWeF[{]odt|Rz1eC@');
define('SECURE_AUTH_KEY',  'JKjk4O]w=U xxgvf]2kWcrAMza4.+-Y*eVrqa-z/-n$V=[&RM7F`V`k;oG,jYHP}');
define('LOGGED_IN_KEY',    '6H3Eu+gFg,MN2ZiE-qo$wvCm CTTb=JP|b0#+zS:_#A%o}D8,i-^&!y )X8nU$7i');
define('NONCE_KEY',        'd:9=vqDaG-(zWnvx6+io?Z^_Dqc,=_HK}0u(j-qnM~tcfBdEGFC%/hxVM: <Ixb7');
define('AUTH_SALT',        'iVJUEirUW*h!=VZwOYs#&#+hIQs|`7Pogha}k!Bp1+a# tPYe>oP/;LvKHgK6&V(');
define('SECURE_AUTH_SALT', 'dX:HN%Zic!=!qI@v1ly5I+rj{0<ZZw))G3Y/]N*f<w6X $ya9m[[a$*2H=$YGe>r');
define('LOGGED_IN_SALT',   'LT/`iQC,U:5l1{>V#g.-S`sB #{)H=ruL?:^sm7(zfKXT&:8%%.k6Wd_fnz09ZKa');
define('NONCE_SALT',       'R%+z*~ThymM d~UqIiGb/qSJsf$[;QE.Tk|np<,nez}ykE?@z?FX%|=j%]_9Or_>');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');