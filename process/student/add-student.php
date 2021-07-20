<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender =$_POST['gender'];
        $address =$_POST['address'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $dob =$_POST['dob'];
        $dept_id=$_POST['department'];

        $sql="INSERT INTO student(stud_id, stud_fname, stud_lname, stud_gender, stud_address, stud_phone, stud_email, stud_dob, stud_dept_id) VALUES ('$id', '$fname', '$lname', '$gender', '$address', '$phone', '$email', '$dob', '$dept_id');";

        if (mysqli_query($conn, $sql)) {
            //student_course relation query
            foreach($_POST['courses'] as $course_id){
                $student_course="INSERT INTO student_course(stud_id, course_id) VALUES ('$id','$course_id');";
                mysqli_query($conn, $student_course);
            }
            header("Location: ../dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>