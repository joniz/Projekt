<?php
function db_connect(){
	$dbh = new PDO('mysql:host=localhost;dbname=db_gymarbete;charset=utf8','root','');

	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return ($dbh);
}

?>