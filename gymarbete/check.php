<?php
session_start();

$anv =$_POST['username'];
$losen =$_POST['password'];

if(!$anv==''&&!$losen==''){
	require_once "connectme.php";

	


	$dbh = db_connect();
		$sth = $dbh->prepare('SELECT anv_id,anv_admin FROM tbl_anv WHERE anv_alias=:alias123 AND anv_losenord=:losenord123');
		$sth->execute(array(':alias123'=>$anv, ':losenord123'=>$losen));
		$affected_rows = $sth->rowCount();
		$svar = $sth->fetch(PDO::FETCH_ASSOC);
	$dbh = NULL;



	if($affected_rows == 1){
		$_SESSION['user'] = $svar['anv_id'];
		$_SESSION['admin'] = $svar['anv_admin'];
		session_write_close();

		header('Location:index.php');

	}
	else{
		header('Location:index.php');
	}
}
?> 
