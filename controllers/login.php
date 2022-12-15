<?php
require_once "../utilities/inputUtils.php";
require_once "./dbInfo.php";
require_once "./userDbController.php";

if (isset($_POST["submit"])) {
    $emailUsername = $_POST["emailUsername"];
    $password = $_POST["password"];
    $userData = [$emailUsername, $password];
    if (checkEmptyInput($userData)) {
        header("location: ../login.php?error=emptyInput");
        exit();
    } else {
        logInUser($conn, $emailUsername, $password);
    }
}
