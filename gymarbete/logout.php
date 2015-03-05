<?php
session_start();
	
if($_POST['action']=='logout'){
unset($_SESSION['user']);
unset($_SESSION['admin']);    
header('Location: index.php'); 
}else{
echo"Du ska inte vara här";
}

?>