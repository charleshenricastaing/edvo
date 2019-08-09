<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'edvofrvrhbedvodb' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`O_HHSAz?C>1FnzH2KyqFu@H!p_qa9J(i18es5C3i92AbgsC/<euRfqzspgB0J6v' );
define( 'SECURE_AUTH_KEY',  '-1dbDIw;by8 |paCv5/@4(`u{#a!IBG` $!Grn; v(`cp*~B4DW`JhVZkQ}S}`jk' );
define( 'LOGGED_IN_KEY',    'aY7~4cFB0q^#D[J}0`X>a@e5%#0.24`LF7vSes,%KaBj1z|elX#zxe|[e9r Pmv;' );
define( 'NONCE_KEY',        'e.@k@9qKi/?GV@n*m<DwHK}:SNR&:?Qx<-xt;S-FnxDT4x>v=TcGX8Yu-4+f^, f' );
define( 'AUTH_SALT',        '{KZnVprampDFIDIz=%$L `%k[/J#qZHH<<6L3)lNLIiZUFZw&6TADar|hIbtC)iz' );
define( 'SECURE_AUTH_SALT', '`*`Ea-/OsKGYsE$lL*^%pxrmUjX?+RzDnjxw#rvWN|hi1=R_ehIJFTYY:L&0n^%4' );
define( 'LOGGED_IN_SALT',   'rrSE~(b-l~#I-<1]fE8MxYX7_9eI9//R3t^][L{e=a`9-OIMAtw`[9V#?(^zY~@P' );
define( 'NONCE_SALT',       '1mFsQIT/`P}KR$Xp:9I?g531*wq0Jf`;fxYg?p0ZGXR^I?!8&C~n/9.Ik-yAVLzG' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
