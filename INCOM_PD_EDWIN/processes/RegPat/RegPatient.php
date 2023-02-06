<?php
	session_start();
	require_once "../../class/pdconnect.php";
	require_once "../../class/patients.php";
	
	$obj=new patients();

	$data=array(
		$_POST['name'],
		$_POST['birthDate']
		);

	echo $obj->RegPatient($data);

?>
