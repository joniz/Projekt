<?php



function test(){



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_GET["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}







//include_once 'inlagg.php';
$rubrik_safe = filter_input(INPUT_GET,'f_rubrik',FILTER_SANITIZE_STRING);
$text_safe = filter_input(INPUT_GET,'f_text',FILTER_SANITIZE_STRING);
$bild_safe = filter_input(INPUT_GET,'f_bild',FILTER_SANITIZE_STRING);

if(isset ($_GET['knapp'])){
	include_once('connectme.php');
	$dbh = db_connect();



//$stmt = $dbh->query('SELECT * FROM tbl_inlagg');
 
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //  echo $row['inlagg_rubrik'].' '.$row['inlagg_text']; //etc...
//}

	if (isset($_GET['f_bild'])) {
		
	


	$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text,inlagg_bild)values(:rubrik, :text1, :bild)');
	



	$stmt->execute(array(':rubrik' => $rubrik_safe, ':text1' => $text_safe , ':bild' => $bild_safe));
	
	

}else{
	$stmt = $dbh->prepare('INSERT INTO tbl_inlagg(inlagg_rubrik,inlagg_text)values(:rubrik, :text1)');
	



	$stmt->execute(array(':rubrik' => $rubrik_safe, ':text1' => $text_safe));
	
	

}
	header('Location: index.php');
}
} 


test();


?>