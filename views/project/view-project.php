<?php include('../../process/project/view-project.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Info</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="mt-3">Faculty Research Project Information:</h4>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Project ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Area</th>
                    <th scope="col">Faculty First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM research;");
                    $faculty_sql=mysqli_query($conn, "SELECT project_name, faculty_fname, faculty_lname FROM faculty inner join research on faculty_id=project_faculty_id;");

                    while($row = mysqli_fetch_array($sql))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['project_id'] . "</td>";
                        echo "<td>" . $row['project_name'] . "</td>";
                        echo "<td>" . $row['project_area'] . "</td>";

                        $faculty_row=mysqli_fetch_array($faculty_sql);
                        echo "<td>" . $faculty_row['faculty_fname'] . "</td>";
                        echo "<td>" . $faculty_row['faculty_lname'] . "</td>";
                        
                        echo "<td><a href='edit-project.php?id=".$row['project_id']."'><button type='submit' class='btn btn-success' name='edit'>Edit</button></a></td>";
                        echo "<td><a href='../../process/project/remove-project.php?id=".$row['project_id']."'><button type='submit' class='btn btn-danger'>Remove</button></a></td>";
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