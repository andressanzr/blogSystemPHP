<?php
require_once "../utilities/inputUtils.php";
require_once "./dbInfo.php";
require_once "./user.php";

if (isset($_POST["submit"])) {
    $emailUsername = $_POST["emailUsername"];
    $password = $_POST["password"];
    $userData = [$emailUsername, $password];
    if (checkEmptyInput($userData)) {
        header("location: ../views/user/login.php?error=emptyInput");
        exit();
    } else {
        logInUser($conn, $emailUsername, $password);
    }
} else {
    header("location: ../login.php");
}
