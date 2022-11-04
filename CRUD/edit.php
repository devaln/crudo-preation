<?php
    include "conn/database_connection.php";
    require "conn/auth.php";
    $id = $_REQUEST['id'];

    $query = "select * from student_record where id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result)

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
            <?php
            
            if(isset($_REQUEST['update'])){
                $id = $_REQUEST['id'];
                
                $first_name = $row['first_name'];
                $middle_name = $row['middle_name'];
                $last_name = $row['last_name'];
                $date_of_birth = $row['date_of_birth'];
                $email = $row['email'];
                $gender = $row['gender'];
                
                $sql = "UPDATE student_record SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', date_of_birth='$date_of_birth', email='$email', gender='$gender' WHERE id='".$id."'";
                $result2 = mysqli_query($conn, $sql);
                if($result2 == true){
                    $alert = " Record Is Updated Successfully";
                    echo '<p style="color:red;">'. $alert .' </p>';
                        
                    }
               }
            ?>
            <fieldset>
                <form action="edit.php" method="post">
                    <strong>Update Persnol information : </strong><br><br>
                    
                    First Name :-
                    <input type = "text" value = "<?php echo $row['first_name']; ?>" name = "first_name" id="first_name" ><br><br>
                    <input type = "hidden" value = "<?php echo $row['id']; ?>" name = "id" id="id" ><br><br>
                    
                    Middle Name :-
                    <input type = "text" value = "<?php echo $row['middle_name']; ?>" name = "middle_name" id="middle_name" ><br><br>
                    
                    Last Name :-
                    <input type = "text" value = "<?php echo $row['last_name']; ?>" name = "last_name" id="last_name" ><br><br>
                    
                    DOB(Date Of Birth) :-
                    <input type = "date" value = "<?php echo $row['date_of_birth']; ?>" name = "date_of_birth" id="date_of_birth" ><br><br>
                    
                    Email Address :-
                    <input type = "email" value = "<?php echo $row['email']; ?>" name = "email" id="email" ><br><br>
                    
                    Gender :-
                    <ul><li><input type = "radio" name = "gender" value="male"<?php if($row['gender'] == 'male'){ echo "checked"; } ?> >Male </li>
                    <li><input type = "radio" name = "gender" value="female"<?php if($row['gender'] == 'female'){ echo "checked"; } ?> >Female </li>
                <li><input type = "radio" name = "gender" value="other"<?php if($row['gender'] == 'other'){ echo "checked"; } ?> >Other </li></ul><br><br>
                
                <input type="submit" value="update" name="update"></input>
                <button class="btn btn-primary"><a href="view.php">back</a></button>
        </form>
    </fieldset>
    </div>
</body>
</html>
