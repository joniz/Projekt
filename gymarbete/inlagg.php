<?php
session_start();
include_once("startend.php");

top();

if(isset($_SESSION['admin'])){
?>  
    <form action="inlaggscript.php" method="GET">

<input type="hidden" name="page" value="test">

<p>Rubrik</p> <input type="text" name="rubrik"/>
<p>Text</p> <input type="text" name="text"/>
<p>Bild</p> <input type="file" name="bild"/>
<input type="submit" name="knapp">
</form>
<?php
}else{
    echo"<p>Du får inte vara här</p>";
}





bottom();

?>