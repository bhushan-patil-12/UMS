<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');
    
    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM department where dept_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE department set dept_id='" . $id. "', dept_name='" . $_POST['name'] . "', dept_college_id='" . $_POST['college'] . "' WHERE dept_id='".$id."';");
        header('Location: ./view-department.php');
    }
?>