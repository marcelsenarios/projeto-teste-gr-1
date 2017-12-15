<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "projeto_teste_gr_1";	



$conexao = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$conexao);