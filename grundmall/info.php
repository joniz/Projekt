

<?php

function info(){
top();


	$db=anslutdb();
 $data = $db->query('SELECT * FROM inlagg');
 
    foreach($data as $row) {	
	
		echo"<fieldset>";
		echo"<legend>".$row["rubrik"]."</legend>";
		
		echo"<div class=\"in\"><br>".$row["rubrik"]."</div>". $row["text"];
		echo"<br><div class=\"time\">".$row["datum"]."</div><br>";
		echo"<img src=\"".$row["bild"]."\" alt=\"trevlig bild\">";
		
		echo"<a href=\"delete.php?del=".$row["inlagg_pk"]."\">delte</a>";
		
		
		echo"</fieldset><br/>";
 }


bottom();


}


?>