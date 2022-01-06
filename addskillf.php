<?php
session_start();
include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Stem 7</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['collegeid'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Hello <?php echo $_SESSION['collegeid'] ?></a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a class="nav-link" href="addskillf.php">Add Skill</a>
                    </li>
                    <?php
                    if (isset($_SESSION['collegeid'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>';
                    } else {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="log_in_form.php">Log In</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-12">
                <form action="addskill.php" method="post">
                    <label for="Skill">Enter Skill Name</label>
                    <input type="text" name="skill">
                    <label for="Comment">Enter Skill Comment</label>
                    <input type="text" name="comment">
                    <input type="hidden" name="cid" value="<?php echo $_SESSION['collegeid'] ?>" />
                    <input type="submit">
                </form>

            </div>

        </div>

    </div>
</body>

</html>