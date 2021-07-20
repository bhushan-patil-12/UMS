<?php
    include ('../../helpers/config.php');
    session_start();

    if(!empty($_POST["college_id"])) 
    {
        $query =mysqli_query($conn, "SELECT * FROM department WHERE dept_college_id = '" . $_POST["college_id"] . "'");
        ?>
        <option value="" selected="true" disabled="disabled">Select department</option>
        <?php
        while($row=mysqli_fetch_array($query))  
        {
            ?>
            <option value="<?php echo $row["dept_id"]; ?>"><?php echo $row["dept_name"]; ?></option>
            <?php
        }
    }
?>
