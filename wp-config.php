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
define( 'DB_NAME', 'fadesign_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Toggle_74' );

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
define( 'AUTH_KEY',         '%BSN6d?i/X2j(j^h?d@9o.-4pN3HgDS:FKQbPP%1*NT#UeBXJCY2ZU%)wbfzuy++' );
define( 'SECURE_AUTH_KEY',  'C|h<~Uz#e$RZ91x-ZMI)d,^!A,^Si~Du|A)U(mNKtB)9Y~..r5 7@*;tEQBdnhKr' );
define( 'LOGGED_IN_KEY',    '+;=AyDv~!|,dGU<!0@V*E(HDY(;^wXLv*I5/^Du57m+tz^Gq}s5mkiGv(%B)nC{C' );
define( 'NONCE_KEY',        '@zVCIAm#QqX-V!0sLF0f%UtIt,/<]6k9n_a&$%.^I &sRHBMutWY0UWt5;JX6?WB' );
define( 'AUTH_SALT',        'w{CzpVqZBv1w86%hb>0:V-C VqY,aS0 OwBUAa>Wh.bl[4/>p9(tmXe@SpO=0 )h' );
define( 'SECURE_AUTH_SALT', 'CpYvcV85fd.2FMY~AAlVj]J@2H-vGXTprTt7jauyrK>dG9@[W~uF`-y;#IOK3:ew' );
define( 'LOGGED_IN_SALT',   'xVGI>w{e|F_,<NIyQ^zLni#g9.ya>a]t^WRnG9OY^BU.~$w$k}j8<>ft_HY]qa>h' );
define( 'NONCE_SALT',       'wVD)d$z5/9b9]y_{/U-}X;q3cM0 MkZM&DsR+@F4f8*q)>h1%Z@{i>aT$p[y^>d/' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
