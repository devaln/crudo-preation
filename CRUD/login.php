<?php
$login = false;
session_start();
include "conn/database_connection.php";
if(isset($_POST['username'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_num_rows($result);
        if($row==1){
            $login = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
        }
        else{
		    echo "<div class='form'><h3>Username/password is incorrect.</h3>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - </title>
</head>
<body>
    <h1>This is your login page.</h1><br>
    <div class="container">
        <form action="login.php" method="post">
            <table>
                <strong>Login details :- </strong>
                <tr>
                    <td><p>Username :-</p></td>
                    <td><input type="text" class="form-action" name='username' id="username" required></td>
                        
                    <td><p>Password :-</p></td>
                    <td><input type="password" class="form-action" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Submit</button></td><br>
                </tr>
            </table>
            <p>If you are not register yet?<a href="register.php"><strong>Register Here</strong></a></p>
        </form>
    </div>
</body>
</html>