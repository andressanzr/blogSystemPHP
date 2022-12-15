<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include("./partials/navbar.php") ?>
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
        <form action="controllers/signUp.php" method="post">
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



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>