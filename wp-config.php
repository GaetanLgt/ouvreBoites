<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @see https://fr.wordpress.org/support/article/editing-wp-config-php/.
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
// Nom de la base de données de WordPress.
define('DB_NAME', 'ouvreboites');

// Utilisateur de la base de données MySQL.
define('DB_USER', 'admin');

// Mot de passe de la base de données MySQL.
define('DB_PASSWORD', 'Oracle$1986');

// Adresse de l’hébergement MySQL.
define('DB_HOST', 'localhost');

// Jeu de caractères à utiliser par la base de données lors de la création des tables.
define('DB_CHARSET', 'utf8mb4');

/*
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

/*#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.(:ChXI~gndFh]pZ*dR`^j]p@%OR{t(SO[}( Z-In<>)>*9Lcdb1c~Wqr,3Le*VD');
define('SECURE_AUTH_KEY', 'N2`D;rC,XW!+fN#ww]B~TN[!<#Fvpz12w_4?ToaK(m&wd( 7SwyO)_!f7a:e=!Hn');
define('LOGGED_IN_KEY', '(}OfL&b_y&Ol4ohOQ!8l{g8vZpG/a(CRofnKp>C]lDoEw3po87E<^Pq28iu2fl}r');
define('NONCE_KEY', 'Me9cQ*Ztl$WM]&#%uUH1T7(UFU[p>Z/wO]KLsSBxn/{{kcmC5bbve!]eQLmz3ga-');
define('AUTH_SALT', '&^Hc<RHq-4i=]&<pJg+n(x: 5$f@%+d8]Uj5}SdMqs?6#hS @bzf1cgFWi?|HRV,');
define('SECURE_AUTH_SALT', '>TZ<iZFn0o)bV:Y+*h#+Ix0w`NAJC<ByCNReL 76}SUPb(sN:XRYKuT#IkxG?M@<');
define('LOGGED_IN_SALT', 'UIs(Ca>~![/iYHO3wT?PA^J&i mG0F3/sn<8bkmj*J:lZMTm0#?q8T#nK;2Bg+]x');
define('NONCE_SALT', 'U^`kN8(rDz]= .FU9G[rzMIafb&6t7.h-,![Le+W,!!C~Cefpj}x#20yvl7%~Iwu');
// #@-

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/*
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

// C’est tout, ne touchez pas à ce qui suit ! Bonne publication.

// Chemin absolu vers le dossier de WordPress.
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once ABSPATH.'wp-settings.php';