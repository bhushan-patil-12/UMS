<?php
    include ('../../helpers/config.php');
    include ('../../helpers/check_session.php');

    $id = $_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM research WHERE project_id = $id"; 

    if (mysqli_query($conn, $sql)) {
        header('Location: ../../views/project/view-project.php');
    } else {
        echo "Error deleting record";
    }
?>