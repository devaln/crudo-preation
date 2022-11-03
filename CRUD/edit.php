<?php
    if(isset($_POST['update'])){
        include "conn/database_connection.php";
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $sql = "UPDATE student SET (first_name='$first_name', middle_name='$middle_name', last_name='$last_name', date_of_birth='$date_of_birth', email='$email', gender='$gender', password='$password') WHERE id='$id' ";
        $result = mysqli_query($conn, $sql);
        
        if($result == true){
            echo "Recorde updated successfully";
        }
        else{
            echo "Something went wrong";
        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $query = "select * from student where id='$id'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                    $first_name = $row['first_name'];
                    $middle_name = $row['middle_name'];
                    $last_name = $row['last_name'];
                    $date_of_birth = $row['date_of_birth'];
                    $email = $row['email'];
                    $gender = $row['gender'];
                    $password = $row['password'];
                    $id = $row['id'];
        }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update - </title>
</head>
<body>
    <div class="container">
        <h1>Update the requied information</h1><br>
    <fieldset>
        <form action="edit.php" method="post">
                <strong>Update Persnol information : </strong><br><br>
            
                First Name :-
                <input type = "text" value = "<?php echo $first_name; ?>" name = "first_name" id="first_name" ><br><br>
                <input type = "hidden" value = "<?php echo $id; ?>" name = "id" id="id" ><br><br>
                
                Middle Name :-
                <input type = "text" value = "<?php echo $middle_name; ?>" name = "middle_name" id="middle_name" ><br><br>

                Last Name :-
                <input type = "text" value = "<?php echo $last_name; ?>" name = "last_name" id="last_name" ><br><br>
                
                DOB(Date Of Birth) :-
                <input type = "date" value = "<?php echo $date_of_birth; ?>" name = "date_of_birth" id="date_of_birth" ><br><br>
                
                Email Address :-
                <input type = "email" value = "<?php echo $email; ?>" name = "email" id="email" ><br><br>
                
                Gender :-
                <ul><li><input type = "radio" name = "gender" value="male"<?php if($gender == 'male'){ echo "checked"; } ?> >Male </li>
                <li><input type = "radio" name = "gender" value="female"<?php if($gender == 'female'){ echo "checked"; } ?> >Female </li>
                <li><input type = "radio" name = "gender" value="other"<?php if($gender == 'other'){ echo "checked"; } ?> >Other </li></ul><br><br>
                
                Password :-
                <input type = "password" value = "<?php echo $password; ?>" name = "password" id="password" ><br><br>

                <input type="submit" value="update" name="update"></input>
                <button class="btn btn-primary"><a href="welcome.php">back</a></button>
        </form>
    </fieldset>
    </div>
</body>
</html>
<?php
    }
?>