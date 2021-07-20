<?php
    include ('../helpers/config.php');
    session_start();

    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="INSERT INTO users(name, dob, phone, email, username, password) VALUES ('$name', '$dob', '$phone', '$email', '$username', '$password');";
        if (mysqli_query($conn, $sql)) {
            header("Location: ./dashboard.php");
        } else {
            echo "<p style='margin-bottom: 20px;'>Email ID is already registered.</p>";
        }
    }
?>