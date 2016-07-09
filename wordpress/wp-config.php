<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpcodethemachine');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'intel3!@#');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%;J;%iW.euv-jM{810D@fv847s&!@9yg!w5N;gb<NY%9+!:Y9?4W2x?dRzQE?HqD');
define('SECURE_AUTH_KEY',  '04{3bBbS !%;:wVS-[z#2gvfGKk5WG{o%N~lys#r.l*}EM*^}}5*k,Mx; 8JGDtR');
define('LOGGED_IN_KEY',    'H[d.JK/i6T_3Pj!UNj{?)P.u6dD2^bz~9wkGd%j6G~Y,#*-95#xG)4++Y,R>0+Ap');
define('NONCE_KEY',        '( )f8$T5s,L<.&2eQ]0W:m`.87k[bW<i{~6F|zt{} pgY>Dz.s]+)?f[815n<a]W');
define('AUTH_SALT',        'zYFWbH$E|4#-Ccxr=!GN/.sqzLK~p6e:Z+tI;2(K^)mjHWtE2)Qa`&/94nX-@6+I');
define('SECURE_AUTH_SALT', '43BtQ7;q{EhToWUa(m%>,ubZ)CX~Z(u-9VwREE/,8qXi#o)Q;.2Xq;uKj~>efGlB');
define('LOGGED_IN_SALT',   'iekl`X8~MxU;4=qT`skp5l;#t{6B!2fwtl!*rTsu@,LFIM+,t~qf-fx1-Upin4An');
define('NONCE_SALT',       ')I;Q.%]Rhz|[Zu~Rk52n2P:.4xttCjmkTiT-zket[UGw1<A yb!WM0>F2QU7>m1~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'dba_wp';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
