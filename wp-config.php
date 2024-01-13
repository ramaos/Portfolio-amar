<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio-amar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'V~hNxqGjb17Ny)VklM*b6!PP]zGm9fc7:oac=caF^?,(|4od,yX-+|kOA!p)uhXo' );
define( 'SECURE_AUTH_KEY',  'Qnj;@]5b_SN7aC8$9`,JL%PO96J)V8NO0j^T*,LV G>u#8#@&0>;2v5U}Mx+6LxM' );
define( 'LOGGED_IN_KEY',    'S[B%{}/Bg~o?I@4&4%HgSQ=J/aZ,Lav9oYhxER6&5A#K%IpL&-%WhW)$89vno:#q' );
define( 'NONCE_KEY',        '7U1/<!t:R_pSW@/5Uq-LXW&;Gh[!zN>IijxC)]]~/aocTNsW.Lw21/[PfoRpWC4~' );
define( 'AUTH_SALT',        'D_V(S?FRI4Pr0V flBe?RdSy0a 9s`w&].v2^LEfR+OIqSfUZDpOIa~+5T7!<F@1' );
define( 'SECURE_AUTH_SALT', '?v#tf7O]q.TMJ(#c-d+LP1v#-Eaul(9Tgh4JrVw?lv?SS5wJg93=TJ>f=o~5<d4Z' );
define( 'LOGGED_IN_SALT',   'ib8#*1vQ yD#(<NG?IZqZ9lXY;$h]t`rVi@!*t6:meE!$>0Xff!QhkwL(1.JwUri' );
define( 'NONCE_SALT',       'L{IXRG!L*qFah4.b=eL%Nrhka}3xMtD*;xmQX~mv!0wJ+y]ZaI2e3UTg]N:YU+Jp' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
