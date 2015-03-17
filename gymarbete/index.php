<?php
session_start();
include_once("startend.php");
include_once('inlaggscript.php');

top();
 //echo $rubrik; 	





	include_once('connectme.php');
	$dbh = db_connect();



$stmt = $dbh->query('SELECT * FROM tbl_inlagg ORDER BY inlagg_id DESC');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
   
   	echo '<h1>'.$row['inlagg_rubrik'].'</h1></<br> '.$row['inlagg_text'].'</br>'.$row['inlagg_bild'];


}





bottom();


?>
	 