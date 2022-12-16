<?php $title = "Home";
require_once "./views/partials/header.php";
require_once "./controllers/entry.php";
require_once "./controllers/dbInfo.php";
?>


<body style="background-color: beige;">
    <?php require_once "./views/partials/navbar.php";  ?>
    <div class="container col-10 mt-5">
        <h1>Blog System</h1>
        <h5><?php if (isset($_SESSION["username"])) echo "<p>Welcome back " . $_SESSION["username"] . "!</p>" ?></h5>
        <h4>Entries:</h4>
        <div class="container d-flex flex-column">
            <div class="row">
                <?php
                $rows = getEntries($conn);
                foreach ($rows as $entry) : ?>
                    <div class="card col-12 col-md-5" style="margin:1rem">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $entry["title"] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $entry["username"] ?></h6>
                            <p class="card-text"><?php echo $entry["entryText"] ?></p>
                            <a href="./views/blogEntry/view.php?entryId=<?php echo $entry['entryId'] ?>" class="card-link">Show full entry</a>

                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </div>

    <?php require_once("./views/partials/footer.php"); ?>
</body>

</html>