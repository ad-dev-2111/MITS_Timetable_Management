<?php
$result="";
include "config.php";
$sql="SELECT * FROM `time`";
$result =$conn->query($sql);
if ($result==TRUE) {
    echo "Time Table Fetched successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
</head>
<body>
    
    <div class="cont"
    <h2>View page</h2>
    <a href="new.php" class="btn btn-primary" class ="right">Add New</a>
    <a href="#" class="btn btn-danger" onclick="confirmAll()" class="right">Delete All</a>
    <table class="table table-light table-striped">
        <head>
            <thread>
            <tr class="table-dark" >
                <th>Branch</th>
                <th>Day</th>
                <th>09:00-10:00</th>
                <th>10:00-11:00</th>
                <th>11:00-12:00</th>
                <th>12:00-01:00</th>
                <th>01:00-02:00</th>
                <th>02:00-03:00</th>
                <th>03:00-04:00</th>
                <th>04:00-05:00</th>
                <th>05:00-06:00</th>
                <th>Action</th>
            </tr>
            </thread>
            <tbody>
                <?php
                if($result->num_rows>0){
                    while ($row = $result->fetch_assoc()) {

                        ?> 
                        <tr>
                        <td><?php echo $row['Branch']; ?></td>
                        <td><?php echo $row['Day']; ?></td>
                        <td><?php echo $row['09:00-10:00']; ?></td>
                        <td><?php echo $row['10:00-11:00']; ?></td>
                        <td><?php echo $row['11:00-12:00']; ?></td>
                        <td><?php echo $row['12:00-01:00']; ?></td>
                        <td><?php echo $row['01:00-02:00']; ?></td>
                        <td><?php echo $row['02:00-03:00']; ?></td>
                        <td><?php echo $row['03:00-04:00']; ?></td>
                        <td><?php echo $row['04:00-05:00']; ?></td>
                        <td><?php echo $row['05:00-06:00']; ?></td>
                        <td>
                            <a class="btn btn-info" href="update.php?branch=<?php echo $row['Branch']; ?>&day=<?php echo urlencode($row['Day']); ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="#" onclick="confirmDelete('<?php echo $row['Branch']; ?>', '<?php echo urlencode($row['Day']); ?>')">Delete</a></td>
                            </tr>

                        <?php  

                    }
                }
                ?>
                </tbody>
    </table>
    </div>
    </div>
    <!-- adding a footer  --><?php
    include "../components/footer.php";
    ?>
    <script>
        function confirmAll() {
        var result = confirm("Are you sure you want to delete the record ?");

        if (result) {
            // Redirect to the delete.php page if the user clicks "OK"
            window.location.href = "delete_all.php";
        }
    }
    function confirmDelete(branch, day) {
        var result = confirm("Are you sure you want to delete the record for " + branch + " on " + day + "?");

        if (result) {
            // Redirect to the delete.php page if the user clicks "OK"
            window.location.href = "delete.php?branch=" + branch + "&day=" + day;
        }
    }
</script>
</body>
</html>