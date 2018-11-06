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
define('DB_NAME', 'unoesc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'w EhBC++H,jL;W*XcACh>z1W@I;-dT|mXy1J|e8_O~T3]#g*l$1WRx[#qYuZ~hx]');
define('SECURE_AUTH_KEY',  '|14@H=bQ@.Bubuf~@ F(/!lPt?.C=LH5p(am[mtnw$gzMVl,1h=x<7t>:&5&X+/p');
define('LOGGED_IN_KEY',    ' )Z8eazrAXer.,%3ep|?K83k.@(O}!E-BRtJ:H_^ZKrJ^z|FE_2:o--BmNCx=L%D');
define('NONCE_KEY',        'DT`>-|XH2?~qUlVmFf*Hn6OvEL;nK{IWtnutbjP(5a ISYcxiJz %iT[B-|/$aNe');
define('AUTH_SALT',        'vHh#~LNS4#Im~LN36EAH!OhlB^#yQORyhU1.:h7R UB|Jzm$E`AI#wg{D)($~ouZ');
define('SECURE_AUTH_SALT', 'H3)ddh$Y0r$#+9:_?^3Fi#d@d.%h(I$JJrh5SZT;~`]5vn2nl4-A-KfqFmWh1]%{');
define('LOGGED_IN_SALT',   'jWx,]^0aLvqVRa_]@>(`N>-kk7u_WZ<`p2sYWy4CLY_^r)4+X&<BBGQ&Y}xZXCRz');
define('NONCE_SALT',       'A<:xRQ$A8,sT++)6Ft6oDng4o2nsBB?df{d{MYayd]k;A_2OhCGaCr@ejUV<4DxB');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
