<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');
    
    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM college where college_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE college set college_id='" . $id. "', college_name='" . $_POST['name'] . "', college_location='" . $_POST['location'] . "', college_phone='" . $_POST['phone'] . "' WHERE college_id='".$id."';");
        header('Location: ./view-college.php');
    }
?>
