<?php 

/**

 */
class deleteOBs {
	
	public function deleteOB(){

		$c=new connect();
		$connection=$c->con();

		$OB=$_SESSION['OB'];

		$deleteOB = "DELETE FROM `paindocdb`.`paindocdata` WHERE `OB`='$OB'";
			$dOB = mysqli_query($connection,$deleteOB);
		$deleteuser = "DELETE FROM `paindocdb`.`paindocusers` WHERE `ID`='$OB'";
			$duser = mysqli_query($connection,$deleteuser);
		return 1;

	}

}

?>