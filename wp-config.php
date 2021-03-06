<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'projeto_teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>_Y47Q@bvNjo*TJ@:vZ~LUaX>y6L=]@D `L/JB~zI4Lrw9vR!t=|Z7i1qIk#5,(?');
define('SECURE_AUTH_KEY',  'wJTx9}`T~3<$m~3k%J`o](oLg6 oCLl^*@:ZPv,Dmx} G.JI^G5YhSSdBG0]fQ~D');
define('LOGGED_IN_KEY',    'z#wM6ECyZHj/~h~!%PxA!y.M2wVN,00_iu+)N)9Qsl}Bs3=&t2$%/l*TQI-!||:p');
define('NONCE_KEY',        'wO!gA6+1ul3Y?)MFT82).88*lj2dt9Cnbrz u>UTLmr4O]pXPKj/:Cl?Jze-mT7j');
define('AUTH_SALT',        'RFUV<oguJNIB%8/0*q8`$$KSs4H(9?Q6!dk~M{iu5&Q?S^D1?@4M}K*Gmr 80DI0');
define('SECURE_AUTH_SALT', '[=_{:)k&;18dGnY!x W9.2/G9cfEoQI=ILP3fj;pjFj7@[uqNH?z;j/O$;d)rvf~');
define('LOGGED_IN_SALT',   '-jhE=p~Jd9@:hgh%E)KKhSnNZC-,^VtYV,:_|B;o/xrI&?*]d*~1HOIr[u67=s[r');
define('NONCE_SALT',       'w!j~f&@5+s7<g%c!rE);O1hvAr?sJ{eG-.<zY,~bKguY7j M)*)Z`r@fqP~//uye');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'lrs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
