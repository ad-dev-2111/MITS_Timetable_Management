<?php
// $slot1 = $slot2 = $slot3 = $slot4 = $slot5 = $slot6 = $slot7 = $slot8 = $slot9 = "";
include "config.php";
if (isset($_POST['update']) && isset($_GET['branch']) && isset($_GET['day']))  {
    $branch = $_GET['branch'];
    $day = $_GET['day'];
    $slot1 = $_POST['slot1'];
    $slot2 = $_POST['slot2'];
    $slot3 = $_POST['slot3'];
    $slot4 = $_POST['slot4'];
    $slot5 = $_POST['slot5'];
    $slot6 = $_POST['slot6'];
    $slot7 = $_POST['slot7'];
    $slot8 = $_POST['slot8'];
    $slot9 = $_POST['slot9'];

    $sql = "UPDATE `time` SET `09:00-10:00`='$slot1', `10:00-11:00`='$slot2', `11:00-12:00`='$slot3', `12:00-01:00`='$slot4', `01:00-02:00`='$slot5', `02:00-03:00`='$slot6', `03:00-04:00`='$slot7', `04:00-05:00`='$slot8', `05:00-06:00`='$slot9' WHERE `branch`='$branch' AND `day`='$day'";

    $result=$conn->query($sql);
    if ($result==TRUE) {?>
<div class="result">
       <?php echo "Row having Branch $branch and Day $day updated successfully"; ?>
        <br></div>
        <?php
        header("refresh:5;url=index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_GET['branch']) && isset($_GET['day'])) {
    $branch = $_GET['branch'];
    $day = $_GET['day'];
    $sql="SELECT * FROM `time` WHERE `branch`='$branch' AND `day`='$day'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $slot1=$row['09:00-10:00'];
            $slot2=$row['10:00-11:00'];
            $slot3=$row['11:00-12:00'];
            $slot4=$row['12:00-01:00'];
            $slot5=$row['01:00-02:00'];
            $slot6=$row['02:00-03:00'];
            $slot7=$row['03:00-04:00'];
            $slot8=$row['04:00-05:00'];
            $slot9=$row['05:00-06:00'];
            $branch=$row['Branch'];
            $day=$row['Day'];
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update</title>
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
        width: 30%;
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
                    <div class="col">
            <h2 style="float: left;">Update</h2>
                    </div>
                    </div>
                    <div>
            <form  action ="" method ="post">
                <fieldset>
                    <legend>Modify the Values</legend>
                    Branch: <input type="text" name="branch" value="<?php echo $branch; ?>" required><br>
                    <br>
                    Day: <input type="text" name="day" value="<?php echo $day; ?>" required><br>
                    <br>
                    09:00-10:00: <input type="text" name="slot1" value="<?php echo $slot1; ?>" ><br>
                    <br>
                    10:00-11:00: <input type="text" name="slot2" value="<?php echo $slot2; ?>" ><br>
                    <br>
                    11:00-12:00: <input type="text" name="slot3" value="<?php echo $slot3; ?>" ><br>
                    <br>
                    12:00-01:00: <input type="text" name="slot4" value="<?php echo $slot4; ?>" ><br>
                    <br>
                    01:00-02:00: <input type="text" name="slot5" value="<?php echo $slot5; ?>" ><br>
                    <br>
                    02:00-03:00: <input type="text" name="slot6" value="<?php echo $slot6; ?>" ><br>
                    <br>
                    03:00-04:00: <input type="text" name="slot7" value="<?php echo $slot7; ?>" ><br>
                    <br>
                    04:00-05:00: <input type="text" name="slot8" value="<?php echo $slot8; ?>" ><br>
                    <br>
                    05:00-06:00: <input type="text" name="slot9" value="<?php echo $slot9; ?>" ><br>
                    <br>
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                </fieldset>
            </form>
            </div>
            </div>
        </body>
        </html>
    <?php
    }
    else {
        header("Location: view.php");
    }
}
?>