<?php
    include('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');
    
    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM student where stud_id=$id");
    $row= mysqli_fetch_assoc($result);

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE student set stud_id='" . $id. "', stud_fname='" . $_POST['fname'] . "', stud_lname='" . $_POST['lname'] . "', stud_gender='" . $_POST['gender'] . "', stud_address='" . $_POST['address'] . "', stud_phone='" . $_POST['phone'] . "', stud_email='" . $_POST['email'] . "', stud_dob='" . $_POST['dob'] . "' , stud_dept_id='" . $row['stud_dept_id'] . "' WHERE stud_id='".$id."';");
        header('Location: ./view-student.php');  
    }
?>