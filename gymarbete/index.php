<?php
session_start();
include_once("startend.php");
include_once('inlaggscript.php');

top();
 //echo $rubrik;





	include_once('connectme.php');
	$dbh = db_connect();



$stmt = $dbh->query('SELECT * FROM tbl_inlagg ORDER BY inlagg_id DESC');


/*while($inlagg = $stmt->fetch(PDO::FETCH_ASSOC)) {
   echo '<h1>'.$inlagg['inlagg_rubrik'].'</h1> '.$inlagg['inlagg_text'].''.$inlagg['inlagg_bild'];

}*/

while($inlagg = $stmt->fetch(PDO::FETCH_ASSOC)) {
				printf("

					<div id='inlaggarea'>
					<h1 class='inlaggh1'>%s</h1>
					<p>%s</p>
					<img src='uploads/%s' class='inlaggbild'></img>
					<p>%s</p>
					</br>
					</div>



					",

					$inlagg['inlagg_rubrik'],
					$inlagg['inlagg_text'],
					$inlagg['inlagg_bild'],
					$inlagg['inlagg_datum']

					  );


				if($_SESSION['admin'] == 1){
    				echo"<a class =\"tabort\" href=\"delete.php?del=".$inlagg["inlagg_id"]."\">Ta bort inlägg</a>";
				}else{
 						echo" ";
 		}

	echo"<hr>";
}



			$dbh = null;










bottom();


?>
