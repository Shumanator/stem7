<?php
session_start();
include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$id = $_SESSION["collegeid"];

$sql = "Select * From creative WHERE college_id = $id";

$result = mysqli_query($conn, $sql);

$creative = array();

while ($row = mysqli_fetch_array($result)) {
    $creative[] = $row;
}

$sql2 = "Select * From communication WHERE college_id = $id";

$result = mysqli_query($conn, $sql2);

$communication = array();

while ($row = mysqli_fetch_array($result)) {
    $communication[] = $row;
}

$sql3 = "Select * From problem WHERE college_id = $id";

$result = mysqli_query($conn, $sql3);

$problem = array();

while ($row = mysqli_fetch_array($result)) {
    $problem[] = $row;
}

$sql4 = "Select * From intellectual WHERE college_id = $id";

$result = mysqli_query($conn, $sql4);

$intellectual = array();

while ($row = mysqli_fetch_array($result)) {
    $intellectual[] = $row;
}

$sql5 = "Select * From decisions WHERE college_id = $id";

$result = mysqli_query($conn, $sql5);

$decisions = array();

while ($row = mysqli_fetch_array($result)) {
    $decisions[] = $row;
}

$sql6 = "Select * From flexibility WHERE college_id = $id";

$result = mysqli_query($conn, $sql6);

$flexibility = array();

while ($row = mysqli_fetch_array($result)) {
    $flexibility[] = $row;
}

$sql7 = "Select * From collaboration WHERE college_id = $id";

$result = mysqli_query($conn, $sql7);

$collaboration = array();

while ($row = mysqli_fetch_array($result)) {
    $collaboration[] = $row;
}

mysqli_close($conn);
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
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Creative</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($creative as $creative) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $creative["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    <?php endforeach; ?>
                    </form>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Communication</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($communication as $communication) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $communication["comment"]; ?>
                        </td>
                    </tr>
                    <br>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Problems</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($problem as $problem) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $problem["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Intellectual</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($intellectual as $intellectual) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $intellectual["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Decisions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($decisions as $decisions) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $decisions["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Flexability</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($flexibility as $flexibility) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $flexibility["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid-sm bg-primary" style="Height:100vh">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center pt-5 text-white">
                <h1>Collaboration</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <?php foreach ($collaboration as $collaboration) : ?>
                    <tr>
                        <td>
                            <?php echo 'Comment:'; ?>
                            <?php echo $collaboration["comment"]; ?>
                        </td>
                        <br>
                        <br>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>