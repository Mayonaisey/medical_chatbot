<?php
class PatientController{
    
    public function __construct(){
        include_once "models/patientModel.php";
    }
    public function addPatient() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Fname = htmlspecialchars($_POST["FName"]);
            $Lname = htmlspecialchars($_POST["LName"]);
            $Email = htmlspecialchars($_POST["Email"]);
            $Password = htmlspecialchars($_POST["Password"]);
            $Hobby = htmlspecialchars($_POST["Hobby"]);

            $patientModel = new patientModel();
            $result = $patientModel->insertPatient($Fname, $Lname, $Email, $Password, $Hobby);

            if ($result) {
                header("Location: /");
            } else {
                echo "Error inserting Patient";
            }
        }
    }

    public function checkPatient(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $Email=$_POST["Email"];
             $Password=$_POST["Password"];
             $patientModel = new patientModel();
             $row= $patientModel->fetchPatient($Email,$Password);
            if($row){
                echo "login success";
           
            }
            else {
            echo "Invalid Email or Password";
           }
    }
    }


}
?>