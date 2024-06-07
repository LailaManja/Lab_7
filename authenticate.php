<?php

include 'Database.php';
include 'User.php';

if (isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    //create database connection
    $database = new Database();
    $db = $database->getConnection();

    $matric = $db->real_escape_string($_POST['matric']);
    $password = $db->real_escape_string($_POST['password']);

    if(!empty($matric) && !empty($password)) {
        $user = new User($db);
        $userDetails = $user->getUser($matric);

        //check if user exist &verify password
        if ($userDetails && password_verify($password, $userDetails['password'])) {
            echo 'Login Successful';
        } else {
            echo 'Login Failed';
        }
    } else {
        echo 'Please fill in all the required fields.';
    }
}