<?php
    include ('../../helpers/config.php');
    session_start();

    if(!empty($_POST["department_id"])) 
    {
        $query =mysqli_query($conn, "SELECT * FROM course WHERE course_dept_id = '" . $_POST["department_id"] . "'");
        ?>
        <option value="" selected="true" disabled="disabled">Select courses</option>
        <?php
        while($row=mysqli_fetch_array($query))  
        {
            ?>
            <option value="<?php echo $row["course_id"]; ?>"><?php echo $row["course_name"]; ?></option>
            <?php
        }
    }
?>


