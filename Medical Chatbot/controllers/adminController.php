<?php
class AdminController
{

    public function __construct()
    {
        include_once "models/adminModel.php";
    }
    public function addDoctor()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['first_name']) && !isset($_POST['doctor_id_edit'])) {
            $first_name = htmlspecialchars($_POST['first_name']);
            $last_name = htmlspecialchars($_POST['last_name']);
            $email = htmlspecialchars($_POST['email']);
            $gender = htmlspecialchars($_POST['gender']);
            $clinic_address = htmlspecialchars($_POST['clinic_address']);
            $phone_number = htmlspecialchars($_POST['phone_number']);
            $specialty = htmlspecialchars($_POST['specialty']);
            $experience_years = htmlspecialchars($_POST['experience_years']);

            $doctorModel = new adminModel();
            $result = $doctorModel->insertDoctor($first_name, $last_name, $email, $gender, $clinic_address, $phone_number, $specialty, $experience_years);

            if ($result) {
                header("Location: /admin");
            } else {
                echo "Error inserting Doctor";
            }
        }
    }

    public function checkPatient()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            $patientModel = new patientModel();
            $row = $patientModel->fetchPatient($Email, $Password);
            if ($row) {
                echo "login success";
            } else {
                echo "Invalid Email or Password";
            }
        }
    }
}
