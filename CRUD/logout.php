<?php
include "conn/database_connection.php";
session_start();

session_unset();
session_destroy();
header("location:login.php");
?>