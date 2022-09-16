<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', '2adm-productions_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
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
define( 'AUTH_KEY',         '$192083-mvBM< &GFrA_,9: /7.Cliu61ne)]u+:>RXx!?o=?zAB[D3b-QDD]Gfc' );
define( 'SECURE_AUTH_KEY',  'M:r|Y{IQrb&T1(b?/]t&?1y==nVe,,7.Fb9Q~^)OKEIkaTu2Zd+?#e%P$cF,>;9<' );
define( 'LOGGED_IN_KEY',    'UBmk>:E6j{RbC>s#EFHJJF/Cdi)XSA]@(BMO-y88&l.Zl=`Gv2BJ]1|4MF3w[`O@' );
define( 'NONCE_KEY',        'VhzG}AV$V*NPr2BHzP~IxTnG?a_9tq8kCF_$LVC#[nxFJi_L;88S6qLC e%6YZ(l' );
define( 'AUTH_SALT',        'ZMsx#wZmzOp xeXJkTcbX%;cc<<a!p_oe<!Juk^{;#U5J~;v^@R }A:{+p*! >,{' );
define( 'SECURE_AUTH_SALT', 'Y<N[kmFVTtzfo6g:?UQcU-Qh<>zhC[XPP-6`/`F%z b(sJ1bE-Y*!y2OMy~tz@We' );
define( 'LOGGED_IN_SALT',   'A^*(`dDAa`fm% T|!K:b6jU36^$iNF@D&6_=1P-L5*kojpN#+[H#eQl?}6&v1J{e' );
define( 'NONCE_SALT',       '=|_hr{=I|r9`#.7+2~]*d{;1db1[KBC,AQkFm7F25|s~iVesHz@eC~ka|ge8w!B&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = '2hyT8';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
