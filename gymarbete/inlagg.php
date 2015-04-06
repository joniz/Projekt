<?php
session_start();
include_once("startend.php");


top();

if(isset($_SESSION['admin'])){
 
include_once 'formularinlagg.php';

}else{
    echo"<p>Du får inte vara här...fgt</p>";
}

?>
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"> </script>
<script>
tinymce.init({
    
    selector: "textarea",
    
 	
 });

 

</script>


<?php



bottom();

?>