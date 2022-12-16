<?php $title = "Sign Up";
require_once("../partials/header.php"); ?>

<body>
    <?php include("../partials/navbar.php") ?>
    <div class="container col-6 offset-3 mt-5">
        <h1>Sign Up</h1>
        <?php
        if (isset($_GET["error"])) {
            $msg;
            switch ($_GET["error"]) {
                case "emptyInput":
                    $msg = "Empty fields";
                    break;
                case "usernameExists":
                    $msg = "Username or email already exists";
                    break;
                case "passwordsDontMatch":
                    $msg = "Passwords don´t match";
                    break;
            }
            echo "<p style=\"color:red\">$msg!</p>";
        }
        ?>
        <form action="../../controllers/signUp.php" method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPasswordRepeat" class="form-label">Password repeat</label>
                <input type="password" class="form-control" name="passwordRepeat" id="exampleInputPasswordRepeat" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>



    <?php require_once("../partials/footer.php") ?>
</body>

</html>