<?php
    include 'conn/database_connection.php';
    if(isset($_POST['username'])){
        $username = $_POST["username"];
        $age = $_POST["age"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
            
        $sqlname = "SELECT * FROM user WHERE username ='$username'";
        $result = mysqli_query($conn, $sqlname);
        $existsname = mysqli_num_rows($result);

        if($existsname > 0){
            echo "username already Exists";
        }
        elseif(($password == $confirm_password)){
            $sql = "INSERT INTO user (username, age, password) VALUES ('$username', '$age', '$password')";
            $result = mysqli_query($conn, $sql); 
            if($result){
                session_start();

                header("location: login.php");
            }
        }
        else{
                $alert = "passwords do not match";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - </title>
</head>
<body>
    <h1>This is your Registration page.</h1><br>
    <div class="container">
        <form action="register.php" method="post">
            <div class="form-control">
                Username :-
                <input type="text" class="form-control" name='username' id="username" required><br><br>

                AGE :-
                <input type="age" class="form-control" name="age" id="age" required><br><br>
                
                Password :-
                <input type="password" class="form-control" name="password" id="password" required><br><br>
                
                Confirm Password :-
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" required><br><br>

                <button type="submit" class="btn btn-primary">Register</button><br><br>
                <p>If you want to go back <a href="login.php"><strong>Click Here</strong></a></p>
            </div>
        </form>
    </div>
</body>
</html>