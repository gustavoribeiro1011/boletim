<?php 
require_once('../config.php');

$conecta = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or print (mysql_error()); 
mysql_select_db(DB_NAME, $conecta) or print(mysql_error()); 
//mysql_close($conecta); 
?>