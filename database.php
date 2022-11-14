<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php_connection";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$con)
{
	die('not connect'.mysql_error());
}
?>