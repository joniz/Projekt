<?php


require 'dbconnet.php';
	

$db=anslutdb();

  $stmt = $db->prepare('delete FROM inlagg WHERE inlagg_pk = :del');
    $stmt->execute(array('del' => $_GET["del"]));
header("Location:index.php?page=info");







?>