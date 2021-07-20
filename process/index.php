<?php 
    include ('./helpers/config.php');
    session_start();
    
    $error='';          
    if(isset($_POST['login'])){
        if(empty($_POST['username'])){
            $error = "Username is empty";
        } else if (empty($_POST['password'])){
            $error = "Password is empty";
        } else {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $query = mysqli_query($conn, "SELECT username, password FROM users WHERE BINARY username= BINARY '$username' AND BINARY password= BINARY '$password'");
            $rows = mysqli_num_rows($query);

            if($rows == 1){
                $_SESSION['username']= $username;
                $_SESSION['password']= $password;
                $_SESSION['active'] = true;      //to chcek session is active or not
                
                header("Location: ./views/dashboard.php");  
            } else {
                $error = "Username or Password is Invalid";
            }
        }
    }
?>