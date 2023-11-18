<?php

// Assuming you have received these variables from your form
$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["pass"];
$sex = $_POST["sex"];
$dob = $_POST["dob"];

// Creating an array with user data
$user_data = [
    "username" => $username,
    "firstname" => $firstname,
    "lastname" => $lastname,
    "pass" => $password,
    "sex" => $sex,
    "dob" => $dob,
];

// Load existing user data
$file_path = "../data/users.json";
$current_data = file_get_contents($file_path);
$users = json_decode($current_data, true);

// Add the new user data to the array
$users[] = $user_data;

// Save the updated user data to the JSON file
file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

// Redirect to the login page
header("Location:../index.php");
exit();  // Ensure that no code is executed after the redirect
?>
