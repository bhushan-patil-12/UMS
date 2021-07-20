<?php
    include('../../helpers/config.php');
    include ('../../helpers/check_session.php');

    $id = $_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM faculty WHERE faculty_id = $id"; 

    if (mysqli_query($conn, $sql)) {
        header('Location: ../../views/faculty/view-faculty.php');
    } else {
        echo "Error deleting record";
    }
?>