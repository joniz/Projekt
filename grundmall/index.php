<?php

include_once("start.php");
include_once("startend.php");
include_once("info.php");
include_once("produkter.php");
include_once("test.php");
include_once( 'dbconnet.php');
$page_ok=filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

if (isset($page_ok)){

	if ($page_ok == "start"){

		start();
	}
	elseif ($page_ok == "test"){

		test();
	}
	
	
	elseif ($page_ok == "info"){

		info();

	}
	
	elseif ($page_ok == "produkter"){

		produkter();

	}else{header("Location: index.php?page=start");}



}else {

header("Location: index.php?page=start");

}
?>