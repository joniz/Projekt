<?php



function test(){
//include_once 'inlagg.php';
$rubrik_safe = filter_input(INPUT_GET,'rubrik',FILTER_SANITIZE_STRING);
$text_safe = filter_input(INPUT_GET,'text',FILTER_SANITIZE_STRING);
$bild_safe = filter_input(INPUT_GET,'bild',FILTER_SANITIZE_STRING);

if(isset ($_GET['knapp'])){
	include_once('connectme.php');
	$dbh = db_connect();



//$stmt = $dbh->query('SELECT * FROM tbl_inlagg');
 
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //  echo $row['inlagg_rubrik'].' '.$row['inlagg_text']; //etc...
//}



	$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text,inlagg_bild)values(:rubrik, :text1, :bild)');
	



	$stmt->execute(array(':rubrik' => $rubrik_safe, ':text1' => $text_safe , ':bild' => $bild_safe));
	
	header('Location: index.php');

}

}

test();



?>