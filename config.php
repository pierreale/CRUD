<?php
/** O nome do banco de dados*/
define('DB_NAME', 'u766101083_pac');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'u766101083_pac');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'diamante');
/** nome do host do MySQL */
define('DB_HOST', 'mysql.hostinger.com.br');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/C:\Users\gisele2\Documents\Documentos-Pierre\Projetos\CRUD');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/CRUD/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');
