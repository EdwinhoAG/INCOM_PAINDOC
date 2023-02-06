<?php

	class patients{
		
		public function RegPatient($data){
			$c=new connect();
			$connection=$c->con();

			$_SESSION['name']=$data[0];

			$to_users = "INSERT INTO paindocusers (ID, Name, birthDate) VALUES ('', '$data[0]', '$data[1]')";
			$user = mysqli_query($connection,$to_users);

			$_SESSION['OB']=SELF::callID($data);

			return $user;

		}

		public function callID($data){
			$c=new connect();
			$connection=$c->con();

			$reqID = "SELECT `ID` FROM paindocusers WHERE `name` = '$data[0]' ORDER BY `paindocusers`.`ID` DESC";
			$res = mysqli_query($connection,$reqID);
			return mysqli_fetch_row($res)[0]; 

		}
	}


?>