<?php
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '123456', 'UMS');

    // Check connection
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_errno());
    }
?>