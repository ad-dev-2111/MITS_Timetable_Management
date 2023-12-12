<?php
// $branch = $day = $slot1 = $slot2 = $slot3 = $slot4 = $slot5 = $slot6 = $slot7 = $slot8 = $slot9 = "";
include "config.php";

if (isset($_POST['submit'])) {
    $branch = $_POST['branch'];
    $day = $_POST['day'];
    $slot1 = $_POST['slot1'];
    $slot2 = $_POST['slot2'];
    $slot3 = $_POST['slot3'];
    $slot4 = $_POST['slot4'];
    $slot5 = $_POST['slot5'];
    $slot6 = $_POST['slot6'];
    $slot7 = $_POST['slot7'];
    $slot8 = $_POST['slot8'];
    $slot9 = $_POST['slot9'];

    // Check if any of the required fields are empty
    if (empty($branch) || empty($day)) {
        echo "Please fill in all the fields.";
    } else {
        // Proceed with the SQL query
        $sql = "INSERT INTO `time` (`Branch`, `Day`, `09:00-10:00`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `01:00-02:00`, `02:00-03:00`, `03:00-04:00`, `04:00-05:00`, `05:00-06:00`) VALUES ('$branch', '$day', '$slot1', '$slot2', '$slot3', '$slot4', '$slot5', '$slot6', '$slot7', '$slot8', '$slot9')";

        $result = $conn->query($sql);

        if ($result) {?>
        <div class="result">
            <?php echo "New record created successfully";?>
            </div><?php
            header("refresh:5;url=index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Enter Schedule</title>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    /* .cont {
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    h2 {
        margin: 0;
    }

    form {
        width: 100%;
        margin: 0 auto;
    }

    fieldset {
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 5px;
    }

    legend {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: calc(100% - 10px);
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    a.btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    }

    a.btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="cont">
<div class="row">
                <div class="col">
            <a href="index.php" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col"  >
            <h2 style="float: left;">Add New</h2>
                    </div>
                    </div>
<div style="float: left;margin-left: 40%";>
    <form  action="new.php" method="POST">
        <fieldset>
            <legend>Enter Schedule</legend>
            
            Branch: <input type="text" name="branch" required><br>
            <br>
            Day: <input type="text" name="day" required><br>
            <br>
            09:00-10:00: <input type="text" name="slot1"><br>
            <br>
            10:00-11:00: <input type="text" name="slot2"><br>
            <br>
            11:00-12:00: <input type="text" name="slot3"><br>
            <br>
            12:00-01:00: <input type="text" name="slot4"><br>
            <br>
            01:00-02:00: <input type="text" name="slot5"><br>
            <br>
            02:00-03:00: <input type="text" name="slot6"><br>
            <br>
            03:00-04:00: <input type="text" name="slot7"><br>
            <br>
            04:00-05:00: <input type="text" name="slot8"><br>
            <br>
            05:00-06:00: <input type="text" name="slot9"><br>
            <br>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </fieldset>
    </form>
</div>
    </div>
</body>
</html>
<?php

?>