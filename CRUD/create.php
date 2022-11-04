<?php
    $alert = "";
    require "conn/auth.php";
    include "conn/database_connection.php";
    if(isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $Record_inserted = $_SESSION['username'];

        $sql = "insert into student_record (first_name, middle_name, last_name, date_of_birth, email, gender, Record_inserted) values ('$first_name', '$middle_name', '$last_name', '$date_of_birth', '$email', '$gender', '$Record_inserted')";
        $result = mysqli_query($conn, $sql);

        if($result ==true){
            $alert = "New Record inserted Successfully";
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
        <form action="create.php" method="post">
            <table>
                <strong>Persnol information : </strong><br><br>
                <tr>
                    <td><p>First Name :-</p></td>
                    <td><input type = "text" name = "first_name" id="first_name" required></td>
                    
                    <td><p>Middle Name :-</p></td>
                    <td><input type = "text" name = "middle_name" id="middle_name" required></td>

                    <td><p>Last Name :-</p></td>
                    <td><input type = "text" name = "last_name" id="last_name" required></td>
                </tr>
                <tr>
                    <td><p>DOB(Date Of Birth) :-</p></td>
                    <td><input type = "date" name = "date_of_birth" id="date_of_birth" required></td>
                </tr>  
                <tr>
                    <td><p>Email Address :-</p></td>
                    <td><input type = "email" name = "email" id="email" required></td>
                </tr>
                <tr>                
                    <td><p>Gender :-</p></td>
                    <td><ul><li><input type = "radio" name = "gender" value="male" required>Male</li>
                    <li><input type = "radio" name = "gender" value="female" required>Female</li>
                    <li><input type = "radio" name = "gender" value="other" required>Other</li></ul></td>
                </tr>
                    <td><input type="submit" class="submit" name="submit"></input> | <button class="btn btn-primary"><a href="/CRUD/">back</a></button></td>
                    <p style="color:red;"><? echo $alert ?></p>
            </table>
        </form>
        <a href="view.php" class="form">view inserted records</a>
    </div>
</body>
</html>