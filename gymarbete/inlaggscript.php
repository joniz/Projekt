<?php
function test(){
include_once 'inlagg.php';

if(isset ($_GET['knapp'])){
	include_once('connectme.php');
	$dbh = db_connect();
	$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text,inlagg_bild)values(:rubrik, :text, :bild)');
	$stmt->execute(array(':rubrik' => $rubrik, ':text' => $text, ':bild' => $bild));
	
	


}










bottom();


}




?>