<?php include('../../process/college/add-college.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add College</title>
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
        <h1 class="mt-3">College Registration:</h1>
        <form class="needs-validation mt-4" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">College ID: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="College ID" id="id" required name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">College Name: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="College Name" id="name" required name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-sm-2 col-form-label">Location: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Location" id="location" required name="location">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone: </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" placeholder="Phone" id="phone" required name="phone">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>