<?php

// if empty input returns true
function checkEmptyInput($userData)
{
    $result = false;
    for ($i = 0; $i < sizeof($userData); $i++) {
        if (strlen($userData[$i]) <= 0) {
            $result = true;
        }
    }
    return $result;
}
function passwordsMatch($pass1, $pass2)
{
    return $pass1 === $pass2;
}

function inputOk($userData)
{
    if (checkEmptyInput($userData)) {
        echo "emptyFunc " . checkEmptyInput($userData);
        header("location: ../signUp.php?error=emptyInput");
        exit();
    } else if (!passwordsMatch($userData[3], $userData[4])) {
        echo "<br>passFunc " . !passwordsMatch($userData[3], $userData[4]);

        header("location: ../signUp.php?error=passwordsDontMatch");
        exit();
    } else {
        return true;
    }
}
