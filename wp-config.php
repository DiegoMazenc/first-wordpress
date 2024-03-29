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
define( 'DB_NAME', 'wp-again' );

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
define( 'AUTH_KEY',         'poK|80Nl:)ZJdaw^8s^45*Hqw8g&#;LB.@Yg%W16K`wX/1XmnqNU*W $=OO?iLX2' );
define( 'SECURE_AUTH_KEY',  'Q/&9b$3$:h;a5NU4|pBAferv`&c~GUx~Ar0<BqLOgd<-8Wr]18^4_m{qZvZ{CG w' );
define( 'LOGGED_IN_KEY',    'N];b*TEQ>>RQ0t][$^Fq:ec`>i(Rs+3E{bryZ,o^5F@WG)u6+8.GWT@,E; O5l:R' );
define( 'NONCE_KEY',        '{]UDOc1PfDK^|)Y@KImi_u69RUMUL-7#o$Oeiv*dury0=j*p8Gy@D5~j^:41sq|q' );
define( 'AUTH_SALT',        'K_.A{wnGvu#x>f8Smz}Way4jKM-XL4[vCqy M)oAh:2two?-Ki*ALJN))Vcd74wr' );
define( 'SECURE_AUTH_SALT', 'BDOwXFav.&GiV&{19ExG5:PwQNH^gv/3el#@FH/=z_MkKD$5MCP`W+:YX+Z_* $1' );
define( 'LOGGED_IN_SALT',   'dV;<GoqqO]b7qMU4d%u0cegEpV2j$YS[dIi|0v+tnXhEX9R<GFXx]xJ>Jm^N|&mc' );
define( 'NONCE_SALT',       'G(vu<-ry^C0FoZWgxc!fl$lWhWKYvQ-T.H)kZc7=!VIcr^h;voq1w}udKc(_$yqX' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'azerty';

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
