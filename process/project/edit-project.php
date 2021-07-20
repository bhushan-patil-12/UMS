<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');
    
    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM research where project_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE research set project_id='" . $id. "', project_name='" . $_POST['name'] . "', project_area='" . $_POST['area'] . "',  project_faculty_id ='" . $_POST['faculty'] . "' WHERE project_id='".$id."';");
        header('Location: ./view-project.php');
    }
?>