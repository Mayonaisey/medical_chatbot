<?php


class patientModel
{
	public string $fname;
	private $conn;

	public function __construct()
	{
		include_once __DIR__ . "/../includes/dbh.inc.php";
		$this->conn = $conn;
	}

	public function insertPatient($Fname, $Lname, $Email, $Password, $Hobby)
	{
		$sql = "insert into users(FirstName,LastName,Email,Password,Hobby) 
		values('$Fname','$Lname','$Email','$Password','$Hobby')";
		$result= mysqli_query($this->conn, $sql);
		return $result;
	}

	public function fetchPatient($Email, $Password)
	{
		$sql = "Select * from users where Email= '$Email' and Password='$Password'";
		$result = mysqli_query($this->conn, $sql);
		$row=mysqli_fetch_array($result);
		return $row;
	}
}
