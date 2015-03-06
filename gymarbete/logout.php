<?php
session_start();
if(isset($_SESSION['admin'])){
unset($_SESSION['user']);
unset($_SESSION['admin']);    
session_destroy();
header('Location: index.php'); 
}else{
echo"Du ska inte vara här...fgt";
}


?>