<?php
    include "conn/database_connection.php";
    require "conn/auth.php";
    $sql = "select * from student_record";
    $result = mysqli_query($conn, $sql);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Your data will show up here.</h1><br>
        <table border="5px">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date Of Birth</th>
                    <th>Email Address</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count=1;
                // if(mysqli_num_rows($result) > 0){
                    while($row=mysqli_fetch_assoc($result)){

                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    
                    <td><?php echo $row['middle_name']; ?></td>
                    
                    <td><?php echo $row['last_name']; ?></td>
                    
                    <td><?php echo $row['date_of_birth']; ?></td>
                
                <td><?php echo $row['email']; ?></td>
                
                <td><?php echo $row['gender']; ?></td>
                
                <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a><b> || </b><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
            </tr>
                <?php
                        $count++; 
                    }
                // }
                ?>
            </tbody>
        </table>
    </div>
    <a href="create.php">click here </a>to insert data.
</body>
</html>