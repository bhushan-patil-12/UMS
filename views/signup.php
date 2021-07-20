<?php include('../process/signup.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Page</title>
    <link rel="stylesheet" href="../assets/css/signup_style.css">
</head>

<body>

    <section class="container" id="container">
        <!-- for sign in container left side -->
        <div class="form-container sign-in-container">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1>Sign Up</h1><br><br>
                <input type="text" placeholder="Name" name="name" required>
                <input type="date" value="2020-09-30" name="dob" required>
                <input type="text" placeholder="Phone" name="phone" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="username" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required><br>
                <button type="submit" name="signup">Sign up</button>
                <br><br>
                <a href="../index.php">Already have an account? Login here</a>
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