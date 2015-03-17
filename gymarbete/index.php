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
					<h1>%s</h1>
					<p>%s</p>
					<img src='file:///C:/Users/g132032/Dropbox/Webbserverprogrammering/www/Projekt/gymarbete/uploads/%s'></img>
					
					

					",

					$inlagg['inlagg_rubrik'],
					$inlagg['inlagg_text'],
					$inlagg['inlagg_bild']
					
					  );
			}



			$dbh = null;


>>>>>>> ef873c63bcb9a9ff67fde069c3e04d7043b12e4e


}





bottom();


?>
	 