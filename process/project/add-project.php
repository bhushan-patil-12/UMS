<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $area=$_POST['area'];
        $faculty=$_POST['faculty'];

        $sql="INSERT INTO research(project_id, project_name, project_area, project_faculty_id) VALUES ('$id','$name','$area', '$faculty');";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../dashboard.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>