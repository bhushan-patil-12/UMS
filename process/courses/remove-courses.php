<?php
    include('../../helpers/config.php');
    include ('../../helpers/check_session.php');
    $id = $_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM course WHERE course_id = $id"; 

    if (mysqli_query($conn, $sql)) {
        header('Location: ../../views/courses/view-courses.php');
    } else {
        echo "Error deleting record";
    }
?>