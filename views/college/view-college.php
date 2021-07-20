<?php include('../../process/college/view-college.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Info</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-3">College Information:</h3>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Phone</th>
                    <th scope="col">University ID</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_array($sql))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['college_id'] . "</td>";
                        echo "<td>" . $row['college_name'] . "</td>";
                        echo "<td>" . $row['college_location'] . "</td>";
                        echo "<td>" . $row['college_phone'] . "</td>";
                        echo "<td>" . $row['college_univ_id'] . "</td>";
                        echo "<td><a href='edit-college.php?id=".$row['college_id']."'><button type='submit' class='btn btn-success' name='edit'>Edit</button></a></td>";
                        echo "<td><a href='../../process/college/remove-college.php?id=".$row['college_id']."'><button type='submit' class='btn btn-danger'>Remove</button></a></td>";
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