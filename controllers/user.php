<?php
function checkUsernameEmailDb($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function logInUser($conn, $emailUsername, $password)
{
    $userExists = checkUsernameEmailDb($conn, $emailUsername, $emailUsername);

    if ($userExists) {
        $pwdHashed = $userExists["password"];
        $checkPwd = password_verify($password, $pwdHashed);
        if ($checkPwd === true) {
            session_start();
            $_SESSION["username"] = $userExists["username"];
            $_SESSION["userId"] = $userExists["userId"];
            header("location: ../index.php?logedIn=true");
        }
        if ($checkPwd === false) {
            header("location: ../views/user/login.php?error=passwordFalse");
        }
    } else {
        header("location: ../views/user/login.php?error=userNotExists");
    }
}
function signUpUser($conn, $name, $username, $email, $password)
{
    $sql = "INSERT INTO users(name,username,email,password) values (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtError");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);

    $_SESSION["username"] = $username;
    $_SESSION["userId"] = mysqli_insert_id($conn);

    mysqli_stmt_close($stmt);
}
