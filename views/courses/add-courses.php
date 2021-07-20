<?php include('../../process/courses/add-courses.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
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

        function getDepartment(val) {
            $.ajax({
            type: "POST",
            url: '../../process/get/get_department.php',
            data:'college_id='+val,
            success: function(data){
                $("#department").html(data);
            }
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">Course Registration:</h1>
        <form class="needs-validation" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group row mt-4">
                <label for="college" class="col-sm-2 col-form-label">College: </label>
                <div class="col-sm-8">
                    <select class="custom-select" onChange="getDepartment(this.value);" id="college" name="college">
                        <option value="" selected="true" disabled="disabled">Select a college</option>
                        <?php 
                            $query =mysqli_query($conn,"SELECT * FROM college");
                            while($row=mysqli_fetch_array($query))
                            { 
                                ?>
                                <option value="<?php echo $row['college_id'];?>"><?php echo $row['college_name'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label">Department: </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="department" name="department">
                        <option value="" selected="true" disabled="disabled">Select a department</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Course ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Course ID" id="id" required name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Course Name: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Course Name" id="name" required name="name">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
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

    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

</body>

</html>