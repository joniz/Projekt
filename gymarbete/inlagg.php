<?php
session_start();
include_once("startend.php");


top();

if(isset($_SESSION['admin'])){

include_once 'formularinlagg.php';

}else{
    echo"<p>Du får inte vara här</p>";
}

?>
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"> </script>
<script>
tinymce.init({

    selector: "textarea",
    width: "100%",
    height: "300"

 });



</script>


<?php



bottom();

?>
