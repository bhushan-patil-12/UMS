<?php
    include('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');
    
    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM course where course_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE course set course_id='" . $id. "', course_name='" . $_POST['name'] . "', course_dept_id='" . $_POST['department'] . "' WHERE course_id='".$id."';");
        header('Location: ./view-courses.php');
    }
?>