<?php
include "config.php";
    // Use backticks around column names, and use prepared statement
    $sql = "DELETE FROM `time`";
    
    $result = $conn->query($sql);

        if ($result) {?>
        <div class="cont">
            <?php echo "Delted all records successfully"; ?>
        </div>
            <?php
            header("refresh:5;url=index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>
