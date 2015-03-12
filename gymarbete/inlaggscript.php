<?php



function test(){
//include_once 'inlagg.php';




if(isset ($_GET['knapp'])){
	include_once('connectme.php');
	$dbh = db_connect();



//$stmt = $dbh->query('SELECT * FROM tbl_inlagg');
 
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //  echo $row['inlagg_rubrik'].' '.$row['inlagg_text']; //etc...
//}



	$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text,inlagg_bild)values(:rubrik, :text1, :bild)');
	



	$stmt->execute(array(':rubrik' => $_REQUEST['rubrik'], ':text1' =>$_REQUEST['text'] , ':bild' => $_REQUEST['bild']));
	
	


}

}

test();



?>