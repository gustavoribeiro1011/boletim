<?php
/** O nome do banco de dados*/
define('DB_NAME', 'boletim');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/boletim/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');
/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE_INDEX', ABSPATH . 'inc/header-index.php');
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('FOOTER_TEMPLATE_ALUNOS', ABSPATH . 'inc/alunos/footer.php');
define('FOOTER_TEMPLATE_MATERIAS', ABSPATH . 'inc/materias/footer.php');
define('FOOTER_TEMPLATE_NOTAS', ABSPATH . 'inc/notas/footer.php');
define('FOOTER_TEMPLATE_PROFESSORES', ABSPATH . 'inc/professores/footer.php');