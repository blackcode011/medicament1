<?php
session_start();
if (!isset($_SESSION['id_patient'])) {
    header("Location: login.php");
    exit();
}

// Connexion à la base de données
$conn = mysqli_connect('localhost', 'root', '', 'medfinder');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_patient = $_SESSION['id_patient'];

// Récupérer les notifications non lues pour le patient
$sql = "SELECT * FROM notifications WHERE id_patient = '$id_patient' AND is_read = FALSE ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Marquer les notifications comme lues
$sql_update = "UPDATE notifications SET is_read = TRUE WHERE id_patient = '$id_patient' AND is_read = FALSE";
mysqli_query($conn, $sql_update);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="./assets/medlogo.png" alt="Logo" height="60"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="medicine-requests.php">Medicine Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="medicine-offers.php">Medical Offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</header>

<div class="container my-5">
    <h1>Notifications</h1>
    <ul class="list-group">
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="list-group-item">' . $row['message'] . '</li>';
            }
        } else {
            echo '<li class="list-group-item">Aucune notification</li>';
        }
        mysqli_close($conn);
        ?>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
