<?php
    session_start();
    include ('../helpers/config.php');

    if (!(isset($_SESSION['active']) && $_SESSION['active'] != '')) {
        header ("Location: ../index.php");
    }

    // Total colleges, students and faculties
    $collegeCount = mysqli_query($conn, "SELECT count(college_name) as collegeCount FROM college;");
    $college = mysqli_fetch_assoc($collegeCount);

    $studentCount = mysqli_query($conn, "SELECT count(stud_id) as studentCount FROM student;");
    $student = mysqli_fetch_assoc($studentCount);

    $facultyCount = mysqli_query($conn, "SELECT count(faculty_id) as facultyCount FROM faculty;");
    $faculty = mysqli_fetch_assoc($facultyCount);
?>