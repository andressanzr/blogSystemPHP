<?php $title = "Login";
require_once("../partials/header.php"); ?>

<body>
    <?php require_once("../partials/navbar.php") ?>
    <div class="container col-6 offset-3 mt-5">
        <h1>Login</h1>
        <?php if (isset($_GET["error"])) {
            $msg;
            switch ($_GET["error"]) {
                case "emptyInput":
                    $msg = "Empty fields";
                    break;
                case "userNotExists":
                    $msg = "Username or email doesn´t exists";
                    break;
                case "passwordFalse":
                    $msg = "Passwords isn´t correct";
                    break;
                case "notLogedIn":
                    $msg = "Please log in";
                    break;
            }
            echo "<p style=\"color:red\">$msg!</p>";
        } ?>
        <form action="../../controllers/login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address or Username</label>
                <input type="text" class="form-control" name="emailUsername" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



    <?php require_once("../partials/footer.php") ?>
</body>

</html>