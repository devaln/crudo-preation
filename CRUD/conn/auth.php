<?php
if(!isset($_SESSION['username'])){
    session_start();
    header("location:login.php");
}
?>