<?php
require "conn/auth.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - </title>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['username']; ?></h1><br>
    <div class="conrainer">
        <a class="container" href="create.php">Insert New Data</a><br>
        <a class="container" href="view.php">View Inserted Data</a><br>
        <a class="container" href="logout.php">Logout</a><br>
    </div>
</body>
</html>