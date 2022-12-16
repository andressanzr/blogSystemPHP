<?php
require_once "../partials/header.php";
require_once "../partials/navbar.php";
require_once "../../controllers/dbInfo.php";
require_once "../../controllers/entry.php";
?>

<body style="background-color: beige;">
    <div class="container col-10 mt-5">
        <h5>Blog Entry</h5>
        <?php
        if (isset($_GET["entryId"])) {
            $res = getEntryById($conn, $_GET["entryId"]);
            if (empty($res)) {
                header("location: ../../index.php");
            } else {


                echo "<h1>" . $res[0]['title'] . "</h1>";
                echo "<h4>" . $res[0]['username'] . "</h4>";
                echo "<p>" . $res[0]['entryText'] . "</p>";
            }
        } else {
            header("location: ../../index.php");
        }
        ?>


        <?php require_once "../partials/footer.php" ?>
</body>