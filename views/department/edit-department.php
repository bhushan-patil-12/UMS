<?php include('../../process/department/edit-department.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
    <!-- css link -->
    <link rel="stylesheet" href="../../assets/css/add_style.css" type="text/css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">Update Department Information:</h1>
        <form class="needs-validation mt-4" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group row">
                <label for="college" class="col-sm-2 col-form-label">College: </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="college" name="college">
                    <option selected value="<?php echo $row['dept_college_id']; ?>">Select a college</option>
                        <?php
                            $sql_dept=mysqli_query($conn, "SELECT * FROM college;");
                            while($row_dept=mysqli_fetch_assoc($sql_dept)){
                                echo "<option value='".$row_dept['college_id']."'>".$row_dept['college_name']."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Department ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" disabled type="text" placeholder="Department ID" id="id" required name="id" value="<?php echo $row['dept_id']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Department Name: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Department Name" id="name" required name="name" value="<?php echo $row['dept_name']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Update</button>
        </form>
    </div>


</body>

</html>