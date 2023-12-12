<?php
session_start();
if (isset($_SESSION['faculty_id'])&& isset($_SESSION['name']) && isset($_SESSION['email'])){
    ?>
<html>
<head>
    <title>view page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" href="../CSS/global.css" type="text/css">
</head>
<?php include "../components/login_navbar.php";?>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timedb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
?>
    <span class="not_connected">●</span>
<?php
} else {
?>
    <span class="connected">●</span>
<?php
}
?>
</body>
</html>
<?php
}else {
    header("Location: ../index.php");
    exit();
}
?>