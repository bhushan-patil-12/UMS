<?php include('../../process/student/edit-student.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
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
        <h1 class="mt-3">Update Student Information:</h1>
        <form class="needs-validation" novalidate action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="form-group row mt-4">
                <label for="department" class="col-sm-2 col-form-label">Department: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Department ID" id="department" disabled value="<?php echo $row['stud_dept_id']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Student ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Student ID" id="id" disabled value="<?php echo $id; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $row['stud_fname']; ?>" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $row['stud_lname']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="gender">Gender: </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="gender" name="gender" >
                        <option selected value="<?php echo $row['stud_gender']; ?>">Select a option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Phone number" id="phone" name="phone" value="<?php echo $row['stud_phone']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="email" id="email" name="email" value="<?php echo $row['stud_email']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">DOB: </label>
                <div class="col-sm-3">
                    <input class="form-control" type="date" placeholder="email" id="dob" name="dob" value="<?php echo $row['stud_dob']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="address" id="address" name="address" value="<?php echo $row['stud_address']; ?>" required>
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