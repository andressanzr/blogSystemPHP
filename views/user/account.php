<?php $title = "Login";
require_once("../partials/header.php");
require_once("../../controllers/user.php");
require_once("../../controllers/dbInfo.php");

?>

<body>
    <?php require_once("../partials/navbar.php") ?>
    <div class="container col-6 offset-3 mt-5">
        <?php
        $res = checkUsernameEmailDb($conn, $_SESSION["username"], "");
        ?>
        <h1>Account details</h1>
        <h6>Name: </h6>
        <p><?php echo $res["name"] ?></p>
        <h6>Username:</h6>
        <p><?php echo $_SESSION["username"] ?></p>
        <h6>UserId:</h6>
        <p><?php echo $_SESSION["userId"] ?></p>
        <h6>Email: </h6>
        <p><?php echo $res["email"] ?></p>

    </div>
    <?php require_once("../partials/footer.php") ?>
</body>