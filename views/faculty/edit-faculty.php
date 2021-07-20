<?php include('../../process/faculty/edit-faculty.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty</title>
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
        <h1 class="mt-3">Update Faculty Information:</h1>
        <form class="needs-validation mt-4" novalidate action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Faculty ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Faculty ID" id="id" disabled value="<?php echo $id; ?>" name="id"> 
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $row['faculty_fname']; ?>">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $row['faculty_lname']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="gender">Gender: </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="gender" name="gender">
                        <option selected value="<?php echo $row['faculty_gender']; ?>">Select a option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Phone number" id="phone" name="phone" value="<?php echo $row['faculty_phone']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="email" id="email" name="email" value="<?php echo $row['faculty_email']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Salary: </label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="Salary" id="salary" name="salary" value="<?php echo $row['faculty_salary']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Update</button>
        </form>
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

</html>i