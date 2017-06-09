<?php

$mysql_hostname = "localhost";

$mysql_user = "lee";

$mysql_password = "1234";

$mysql_database = "smr";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysql_select_db($mysql_database, $bd) or die("db connect error");

  

?>