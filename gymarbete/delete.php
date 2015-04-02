<?php


include_once('connectme.php');
	$dbh = db_connect();

  $stmt = $dbh->prepare('delete FROM tbl_inlagg WHERE inlagg_id = :del');
    $stmt->execute(array('del' => $_GET["del"]));
header("Location:index.php");







?>