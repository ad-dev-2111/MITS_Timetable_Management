<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- <link rel="stylesheet" href="login/style-1.css" type="text/css">   -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/global.css" type="text/css">

</head>
<body>
        <nav class ="navbar1">
        <div class = "img1">
            <!-- inserting image -->
            <img src="CSS/src/mits.jpg" alt="college" width = 100%>
        </div>
        <!-- crating navigation bar -->
        <ul class="menu1">
            <li class="menu-item1"><a href="#">Home</a></li>
            <li class="menu-item1"><a href="#">About</a></li>
            <!-- <li><a href="contact.html">Contact</a></li> -->
            <li class="menu-item1"><a href="index.php">Login</a></li>
</nav>
    <div class="form">
    <form action="login/login.php" method ="post">
        <h2>Faculty Login</h2>
        <?php
            if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php
                
            }
            ?>
        <lable for="username"></lable><br>
        <input type="varchar" name="username" placeholder="Username" ><br>
        <lable for="password"></lable><br>
        <input type="password" name="password" placeholder="Password" ><br>
        <button type="submit">Login</button>
        </form>
    </div>
    <!-- adding a footer  --><?php
    include "components/footer.php";
    ?>
</body>
</html>