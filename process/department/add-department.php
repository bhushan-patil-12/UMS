<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $college=$_POST['college'];

        $sql="INSERT INTO department(dept_id, dept_name, dept_college_id) VALUES ('$id','$name','$college');";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../dashboard.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>