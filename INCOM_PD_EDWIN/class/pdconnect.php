<?php
  class connect{
	private $host = "localhost";
	private $user = "root";
	private $pass = "BIMsenAlemania";
	private $datab = "paindocdb";
	
  	public function con() {
		$connection = mysqli_connect($this->host, $this->user, $this->pass, $this->datab);
		return $connection;
  	}
  }	

?>
