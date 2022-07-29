<?php 


$conn = mysqli_connect('localhost', 'root', '', 'database_login_php');

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>