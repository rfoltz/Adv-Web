<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbConnection = "localhost";
$database_dbConnection = "robertfo_advweb";
$username_dbConnection = "root";
$password_dbConnection = "root";
$dbConnection = mysql_pconnect($hostname_dbConnection, $username_dbConnection, $password_dbConnection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>