<?php


class adminModel
{
    // public string $fname;
    private $conn;

    public function __construct()
    {
        include_once __DIR__ . "/../includes/dbh.inc.php";
        $this->conn = $conn;
    }

    public function insertDoctor($first_name, $last_name, $email, $gender, $clinic_address, $phone_number, $specialty, $experience_years)
    {
        $sql = "INSERT INTO doctors (first_name, last_name, email, gender, clinic_address, phone_number, specialty, experience_years) 
            VALUES ('$first_name', '$last_name', '$email', '$gender', '$clinic_address', '$phone_number', '$specialty', '$experience_years')";
            
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function fetchPatient($Email, $Password)
    {
        $sql = "Select * from users where Email= '$Email' and Password='$Password'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }
}
