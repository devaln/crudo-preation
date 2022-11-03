<?php
if(isset($_GET['id'])){
    include "conn/database_connection.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM student WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        echo "Record deleted successfully";
    }
    else{
        echo "Record is not deleted";
    }
}
?>