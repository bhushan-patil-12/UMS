<?php include('process/index.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/index_style.css" type="text/css">
</head>

<body>

    <section class="container" id="container">
        <!-- for sign in container left side -->
        <div class="form-container sign-in-container">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1>Log in</h1><br><br>
                <input type="username" placeholder="Username" name="username"/>
                <input type="password" placeholder="Password" name="password"/><br>
                <span><?php echo $error; ?></span>
                <button type="submit" name="login">Log In</button>
                <br><br>
                <a href="views/signup.php">Don't have an account? Register here</a>
            </form>
        </div>
        
        <!-- for info container right side -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>UMS</h1>
                    <p>A transparent and user friendly University Management System.</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>