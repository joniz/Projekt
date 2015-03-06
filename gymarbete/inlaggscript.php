<?php
include_once('connectme.php');
function test(){
top();
if(isset ($_GET['knapp'])){

	
$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text,inlagg_bild)values(:rubrik, :text, :bild)');
$stmt->execute(array(':rubrik, :text, :bild' => $_GET['inlaggsvar']));
header('Location: index.php');
}







bottom();


}




?>