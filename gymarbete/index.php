<?php
session_start();
include_once("startend.php");
//include_once('inlaggscript.php');

top();
 //echo $rubrik;





	include_once('connectme.php');
	$dbh = db_connect();



$stmt = $dbh->query('SELECT * FROM tbl_inlagg ORDER BY inlagg_id DESC');

//$stmt = $dbh->query('SELECT * FROM tbl_inlagg ORDER BY inlagg_id DESC');





/*while($inlagg = $stmt->fetch(PDO::FETCH_ASSOC)) {
   echo '<h1>'.$inlagg['inlagg_rubrik'].'</h1> '.$inlagg['inlagg_text'].''.$inlagg['inlagg_bild'];

}*/
$anv_id_pk=null;
$namn=null;
while($inlagg = $stmt->fetch(PDO::FETCH_ASSOC)) {
				
		$sth = $dbh->query("SELECT * FROM tbl_anv WHERE anv_id_pk='".$inlagg["anv_id_fk"]."'");


while($forfattare = $sth->fetch(PDO::FETCH_ASSOC)) {


$namn=$forfattare['anv_alias'];
$anvid=$forfattare['anv_id_pk'];

}

				echo '<div id= "inlaggarea">';
					echo '<h1 class= "inlaggh1">'.$inlagg['inlagg_rubrik'].'</h1>';
					echo '<p>'.$inlagg['inlagg_text'] .'</p>';

					if(!$inlagg['inlagg_bild'] == null){
					echo '<img src="uploads/'.$inlagg['inlagg_bild'].'" class="inlaggbild"></img>'; echo "</br>";
					
					}else{
						echo "";
					}

					echo "</br>";
					echo '<p>'.$inlagg['inlagg_datum'].'</p>';
					
					echo"</br>";
					echo"</div>";

				/*printf("

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
					$inlagg['inlagg_tid']

					  );
			
				*/
			


				if(isset($_SESSION['admin'])){
    				echo"<a class = \"tabort\" href=\"delete.php?del=".$inlagg["inlagg_id"]."\">Ta bort inlägg</a>";

				}else{
 						echo"";
 		}
 		echo "<a href='anvandarsida.php?id=".$anvid."' class='forfattare'>Av: ".$namn."</a>";

	echo"<hr>";
}



			$dbh = null;










bottom();


?>
