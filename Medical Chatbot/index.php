<?php
require_once __DIR__ . '\\vendor\\autoload.php';
require_once "controllers/patientController.php";
$router = new \Bramus\Router\Router();

$router->get('/index.php', function () {
    //root page
    include_once "views/Home.php";
});


$router->get('/login', function () {
    include_once "views/login.php";
});

$router->post('/loginUser', function () { //aiza at2ked hena mfrood bn3ml login ll patient fl models patient w login tany ll doctor f models dr wla user model fy login mra wahda

    $patientController = new PatientController();
    $patientController->checkPatient();
});

$router->get('/signup', function () {
    //for signup page
    include_once "views/SignUp.php";
});

//grap data from user if form was submitted 
$router->post('/addUser', function () {
    $patientController = new PatientController();
    $patientController->addPatient();
});
$router->get('/app', function () {
    include_once "views/Appointment.php";
});

$router->get('/makeApp', function () {
    //calls a function in controller to make an appointment
});

$router->get('/chatbot', function () {
    include_once "views/chatbot.php";
});

$router->get('/admin', function () {
    include_once "views/Admin.php";
});
$router->run();
