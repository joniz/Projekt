<?php

function test(){
top();
if(isset ($_REQUEST['knapp'])){

$db=anslutdb();	
$stmt = $db->prepare('insert into inlagg(rubrik,text,bild)values(:rubrik, "hård kodad text","hej.jpg")');
$stmt->execute(array(':rubrik' => $_REQUEST['rubrik']));

}

?>
<br/>
<br/>
<br/>
<form action="index.php" method="GET">

<input type="hidden" name="page" value="test">

Rubrik <input type="text" name="rubrik"/>
<input type="submit" name="knapp">
</form>

<?php



bottom();


}




?>