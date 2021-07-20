<?php include('../process/dashboard.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CSS link -->
    <link rel="stylesheet" href="../assets/css/dashboard_style.css" type="text/css"> 
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-static-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Dashboard</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown  active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        College
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="college/add-college.php">Add College</a>
                        <a class="dropdown-item" href="college/view-college.php">View Colleges</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Department
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="department/add-department.php">Add Department</a>
                        <a class="dropdown-item" href="department/view-department.php">View Departments</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="courses/add-courses.php">Add Course</a>
                        <a class="dropdown-item" href="courses/view-courses.php">View Courses</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Student
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="student/add-student.php">Add Student</a>
                        <a class="dropdown-item" href="student/view-student.php">View Students</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Faculty
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="faculty/add-faculty.php">Add Faculty</a>
                        <a class="dropdown-item" href="faculty/view-faculty.php">View Faculties</a>
                        <a class="dropdown-item" href="project/add-project.php">Add Project</a>
                        <a class="dropdown-item" href="project/view-project.php">View Projects</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="../process/logout.php"><button type="button" class="btn btn-outline-light">Logout</button></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron for information -->
    <div class="jumbotron jumbotron-fluid" style="background-color: transparent;">
        <div class="container">
            <?php echo "<h1>Welcome, ".$_SESSION['username']."</h1>"; ?>
            <p class="lead">This is a University Management system. Using navigation menu you can add, view, remove and
                update the university data.</p>
        </div>
    </div>

    <!-- information cards -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">No. of Colleges</h5>
                        <p class="card-text"> <?php echo $college['collegeCount']; ?></p>
                        <a href="college/add-college.php" class="btn btn-primary">Add College</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">No. of Students</h5>
                        <p class="card-text"><?php echo $student['studentCount']; ?></p>
                        <a href="student/add-student.php" class="btn btn-primary">Add Student</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">No. of Faculty</h5>
                        <p class="card-text"><?php echo $faculty['facultyCount']; ?></p>
                        <a href="faculty/add-faculty.php" class="btn btn-primary">Add Faculty</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-5">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">University Information</h5>
                        <p class="card-text">Name: UVW University <br>University ID: 1001 <br> University Rank: 25</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>