<?php

	session_start();
	require_once "../class/pdconnect.php";
	require_once "../class/OBs.php";
	
	$obj=new deleteOBs();

	echo $obj->deleteOB();

	session_destroy();

	header("location:../index.php"); 

?>