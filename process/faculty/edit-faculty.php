<?php
    include('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM faculty where faculty_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE faculty set faculty_id='" . $id. "', faculty_fname='" . $_POST['fname'] . "', faculty_lname='" . $_POST['lname'] . "', faculty_phone='" . $_POST['phone'] . "', faculty_gender='" . $_POST['gender'] . "', faculty_email='" . $_POST['email'] . "', faculty_salary='" . $_POST['salary'] . "' WHERE faculty_id='".$id."';");
        header('Location: ./view-faculty.php');  
    }
?>
