<?php
session_start();
include_once("startend.php");

top();


echo"<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">";
   echo"<p>Select image to upload:<p>";
    echo"<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">";
echo"<label for=\"rubrik\" class=\"uploadlabel\">rubrik</label>";
echo"<input type=\"text\" name=\"rubrik\" id=\"rubrik\">";

echo"<label for=\"text\" class=\"uploadlabel\">text</label>";
echo"<input type=\"textarea\" name=\"text\" id=\"text\">";

    echo"<input type=\"submit\" value=\"Upload Image\" name=\"submit\">";
echo"</form>";




bottom();

?>