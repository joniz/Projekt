<?php
session_start();
include_once("startend.php");

top();

$files = glob("uploads/*.*"); 
for ($i=0; $i<count($files); $i++) {
 $num = $files[$i]; 
 echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;"; 
}

//Read more: http://www.phpmagicbook.com/display-images-from-folder/#ixzz3RXLflTXF

bottom();


?>