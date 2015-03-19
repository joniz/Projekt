<?php
session_start();
include_once("startend.php");


top();

if(isset($_SESSION['admin'])){
?>  
    <form action="inlaggscript.php" method="GET">

<input type="hidden" name="page" value="test">

<p>Rubrik</p> <input type="text" name="f_rubrik"/>
<p>Text</p> <textarea type="text" name="f_text"></textarea>
<p>Bild</p> <input type="file" name="f_bild" value = "Sweg"/>
<input type="submit" name="knapp">
</form>
<?php
}else{
    echo"<p>Du får inte vara här...fgt</p>";
}

?>
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"> </script>
<script>
tinymce.init({
    selector: "textarea"
 });
</script>


<?php



bottom();

?>