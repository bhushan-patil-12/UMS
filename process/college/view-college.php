<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    $sql = mysqli_query($conn, "SELECT * FROM COLLEGE;");
?>