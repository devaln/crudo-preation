<?php
    if(isset($_POST['submit'])){
        include "conn/database_connection.php";
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $sql = "insert into student(first_name, middle_name, last_name, date_of_birth, email, gender, password) values ('$first_name', '$middle_name', '$last_name', '$date_of_birth', '$email', '$gender', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result ==true){
            echo "New Record inserted Successfully";
            header("location: welcome.php");
        }
        else{
            echo "Error". mysqli_query_error($result);
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
    <div class="container">
        <h1>Enter the requied details</h1><br>
    <fieldset>
        <form action="create.php" method="post">
                <strong>Persnol information : </strong><br><br>
            
                First Name :-
                <input type = "text" name = "first_name" id="first_name" required><br><br>
                
                Middle Name :-
                <input type = "text" name = "middle_name" id="middle_name" required><br><br>

                Last Name :-
                <input type = "text" name = "last_name" id="last_name" required><br><br>
                
                DOB(Date Of Birth) :-
                <input type = "date" name = "date_of_birth" id="date_of_birth" required><br><br>
                
                Email Address :-
                <input type = "email" name = "email" id="email" required><br><br>
                
                Gender :-
                <ul><li><input type = "radio" name = "gender" value="male" required>Male</li>
                <li><input type = "radio" name = "gender" value="female" required>Female</li>
                <li><input type = "radio" name = "gender" value="other" required>Other</li></ul><br><br>
                
                Password :-
                <input type = "password" name = "password" id="password" required><br><br>

                <input type="submit" class="submit" name="submit"></input>
            </form>
            <button class="btn btn-primary"><a href="/CRUD/">back</a></button>
        </fieldset>
    </div>
</body>
</html>