<?php
session_start();
<<<<<<< HEAD

if($_POST['action']=='logout'){


unset($_SESSION['user']);
unset($_SESSION['admin']);
header('Location: index.php');
}
else{
	echo "Nä";


}
=======
	
if(isset($_SESSION['admin'])){
unset($_SESSION['user']);
unset($_SESSION['admin']);    
session_destroy();
header('Location: index.php'); 
}else{
echo"Du ska inte vara här";
}

>>>>>>> origin/master
?>