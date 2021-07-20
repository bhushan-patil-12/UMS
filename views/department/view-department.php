<?php include('../../process/department/view-department.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Info</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-3">Department Information:</h3>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department name</th>
                    <th scope="col">College name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM DEPARTMENT;");
                    $college_sql=mysqli_query($conn, "SELECT dept_name, college_name FROM college inner join department on college_id=dept_college_id;");

                    while($row = mysqli_fetch_array($sql))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['dept_id'] . "</td>";
                        echo "<td>" . $row['dept_name'] . "</td>";

                        $college_row=mysqli_fetch_array($college_sql);
                        echo "<td>" . $college_row['college_name'] . "</td>";
                        
                        echo "<td><a href='edit-department.php?id=".$row['dept_id']."'><button type='submit' class='btn btn-success' name='edit'>Edit</button></a></td>";
                        echo "<td><a href='../../process/department/remove-department.php?id=".$row['dept_id']."'><button type='submit' class='btn btn-danger'>Remove</button></a></td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>