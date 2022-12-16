<?php
require_once "./dbInfo.php";
require_once "./entry.php";
session_start();
if (isset($_POST["submit"])) {
    $entryText = $_POST["entryText"];
    $title = $_POST["title"];
    $userId = $_SESSION["userId"];

    newEntry($conn, $title, $entryText, $userId);
}
