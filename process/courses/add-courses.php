<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $dept_id=$_POST['department'];

        $sql="INSERT INTO course(course_id, course_name, course_dept_id) VALUES ('$id','$name','$dept_id');";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../dashboard.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>