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
					</br>
					</div>
					<hr>

					",

					$inlagg['inlagg_rubrik'],
					$inlagg['inlagg_text'],
					$inlagg['inlagg_bild']
					
					  );
				
	if(isset($_SESSION['admin'])){

		if($_SESSION['admin']){
    	echo"<a href=\"delete.php?del=".$inlagg["inlagg_id"]."\">Delete</a>";
		}

		else{
 			echo" ";
 		}
	}
}



			$dbh = null;










bottom();


?>
	 