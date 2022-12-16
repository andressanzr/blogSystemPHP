<?php

function getEntries($conn)
{
    $sql = "SELECT e.`entryId`, e.`title`, e.`entryText`, users.username FROM `entries` as e inner join users on e.userId =users.userId";

    $res = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return $rows;
}
function getEntryById($conn, $entryId)
{
    $sql = "SELECT e.`entryId`, e.`title`, e.`entryText`, users.username FROM `entries` as e inner join users on e.userId =users.userId WHERE e.`entryId`=$entryId";

    $res = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return $rows;
}
function newEntry($conn, $title, $entryText, $userId)
{
    $sql = "INSERT INTO entries(title,entryText,userId) values (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/blogEntry/new.php?error=stmtError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssi", $title, $entryText, $userId);
    mysqli_stmt_execute($stmt);

    header("location: ../index.php?rows=$title/$entryText/$userId");

    mysqli_stmt_close($stmt);
}
