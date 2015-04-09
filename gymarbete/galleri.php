<?php
session_start();
include_once("startend.php");

top();

$files = glob("uploads/*.*");
for ($i=0; $i<count($files); $i++) {
 $num = $files[$i];
 echo '<a href="'.$num.'"><img src="'.$num.'" class="galleribild" alt="random image"></a>';
}

//Read more: http://www.phpmagicbook.com/display-images-from-folder/#ixzz3RXLflTXF

bottom();


?>
