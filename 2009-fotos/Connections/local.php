<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_local = "mysql.movimentodeirmaos.com.br";
$database_local = "movimentodeirm";
$username_local = "movimentodeirm";
$password_local = "mov2012";
$local = mysql_pconnect($hostname_local, $username_local, $password_local) or trigger_error(mysql_error(),E_USER_ERROR); 
?>