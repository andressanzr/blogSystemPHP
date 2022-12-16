<?php session_start();
$path = "http://localhost:8080/Archivos/new/blogSystemPHP/";
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $path ?>index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo $path ?>index.php">Home</a>
                <?php
                $str;
                if (isset($_SESSION["username"]) || isset($_SESSION["userId"])) {
                    $str = '<a class="nav-link" href="' . $path . 'views/blogEntry/new.php">Write Entry</a><a class="nav-link" href="' . $path . 'views/user/account.php">Account</a><a class="nav-link" href="' . $path . 'controllers/logout.php">Logout</a>';
                } else {
                    $str = '<a class="nav-link" href="' . $path . 'views/user/login.php">Login</a><a class="nav-link" href="' . $path . 'views/user/signup.php">Sign up</a>';
                }
                echo $str;
                ?>


            </div>
        </div>
    </div>
</nav>