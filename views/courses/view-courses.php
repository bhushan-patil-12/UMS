<?php include('../../process/courses/view-courses.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Info</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-3">Courses Information:</h3>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course name</th>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM COURSE;");
                    $dept_sql=mysqli_query($conn, "SELECT course_id, dept_name, college_name from course s INNER JOIN department d on s.course_dept_id=d.dept_id INNER JOIN college c on d.dept_college_id=c.college_id ORDER BY s.course_id;");

                    while($row = mysqli_fetch_array($sql))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['course_id'] . "</td>";
                        echo "<td>" . $row['course_name'] . "</td>";
                        echo "<td>" . $row['course_dept_id'] . "</td>";

                        $dept_row=mysqli_fetch_array($dept_sql);
                        echo "<td>" . $dept_row['dept_name'] . "</td>";
                        echo "<td>" . $dept_row['college_name'] . "</td>";
                        
                        echo "<td><a href='edit-courses.php?id=".$row['course_id']."'><button type='submit' class='btn btn-success' name='edit'>Edit</button></a></td>";
                        echo "<td><a href='../../process/courses/remove-courses.php?id=".$row['course_id']."'><button type='submit' class='btn btn-danger'>Remove</button></a></td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </tbody>
        </table>
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