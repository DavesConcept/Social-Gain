<?php
/*	define('Db_Server','localhost');
	define('Db_Username','root');
	define('Db_Password','');
	define('Db_Dbase','personnel');
	
$db = mysqli_connect(Db_Server,Db_Username,Db_Password,Db_Dbase); */

//$db = mysqli_connect("localhost","root","","personnel");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbase = "power";

//$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbase);

$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbase);
?>