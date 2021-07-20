<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers\check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $location=$_POST['location'];
        $phone=$_POST['phone'];

        $sql="INSERT INTO college(college_id, college_name, college_location, college_phone, college_univ_id) VALUES ('$id', '$name', '$location', '$phone', 1001)";

        if (mysqli_query($conn, $sql)) {
            echo "New college added successfully.";
            header('Location: ../dashboard.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>