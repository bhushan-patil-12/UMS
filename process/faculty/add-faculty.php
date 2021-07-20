<?php
    include ('../../helpers/config.php');
    session_start();
    include ('../../helpers/check_session.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender =$_POST['gender'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $salary =$_POST['salary'];
        $dept_id=$_POST['department'];

        $sql="INSERT INTO faculty(faculty_id, faculty_fname, faculty_lname, faculty_phone, faculty_gender, faculty_email, faculty_salary) VALUES ('$id', '$fname', '$lname', '$phone', '$gender', '$email', '$salary');";

        //faculty_department relation query
        $dept_faculty="INSERT INTO department_faculty(department_id, faculty_id) VALUES ('$dept_id','$id');";
        
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $dept_faculty)) {
            //faculty_courset relation query
            foreach($_POST['courses'] as $course_id){
                $course_faculty="INSERT INTO course_faculty(faculty_id, course_id) VALUES ('$id','$course_id');";
                mysqli_query($conn, $course_faculty);
            }
            header("Location: ../dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>