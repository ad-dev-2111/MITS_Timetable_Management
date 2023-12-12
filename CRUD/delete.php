<?php
include "config.php";

if (isset($_GET['branch']) && isset($_GET['day'])) {
    $branch = $_GET['branch'];
    $day = $_GET['day'];

    // Use backticks around column names, and use prepared statement
    $sql = "DELETE FROM `time` WHERE `branch`=? AND `day`=?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $branch, $day);

    if ($stmt->execute()) {?>
    <div class="cont">
    <?php
        echo "Row having Branch $branch and Day $day Deleted successfully";
        ?></div>
        <?php
        header("refresh:5;url=index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
?>
