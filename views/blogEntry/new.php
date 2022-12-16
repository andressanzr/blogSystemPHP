<?php
$title = "New Blog Entry";
require_once "../partials/navbar.php";
require_once "../partials/header.php";
if (empty($_SESSION["userId"])) {
    header("location: ../user/login.php?error=notLogedIn");
}
?>

<body>

    <div class="container col-6 offset-3 mt-5">
        <h1>New Blog Entry</h1>
        <form action="../../controllers/entryNew.php" method="post">
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="Title" placeholder="Title..." required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>

                <textarea name="entryText" id="" class="form-control" cols="30" rows="10" placeholder="Entry text.." required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php require_once "../partials/footer.php"; ?>
</body>