<?php
require_once "../utilities/inputUtils.php";
require_once "./dbInfo.php";
require_once "./userDbController.php";

if (isset($_POST["submit"])) {
    // retrieve data from POST request
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    $userData = [$name, $username, $email, $password, $passwordRepeat];
    if (inputOk($userData)) {
        if (!checkUsernameEmailDb($conn, $username, $email)) {
            signUpUser($conn, $name, $username, $email, $password);
            header("location: ../home.php?message=signedUp");
        } else {
            header("location: ../signUp.php?error=usernameExists");
        }
    }
} else {
    header("location: ../signUp.php");
}
