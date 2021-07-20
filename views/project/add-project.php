<?php include('../../process/project/add-project.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
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
        <h1 class="mt-3">Research Project Registration:</h1>
        <form class="needs-validation" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

            <div class="form-group row mt-3">
                <label for="id" class="col-sm-2 col-form-label">Project ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Project ID" id="id" required name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Project Name: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Project Name" id="name" required name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-sm-2 col-form-label">Area: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Area" id="area" required name="area">
                </div>
            </div>

            <div class="form-group row">
                <label for="faculty" class="col-sm-2 col-form-label">Faculty Name: </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="faculty" name="faculty">
                    <option selected disabled>Select faculty name</option>
                        <?php
                            $sql_faculty=mysqli_query($conn, "SELECT * FROM faculty;");
                            while($row=mysqli_fetch_assoc($sql_faculty)){
                                echo "<option value='".$row['faculty_id']."'>".$row['faculty_fname']." ".$row['faculty_lname']."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>