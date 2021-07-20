<?php
    if (!(isset($_SESSION['active']) && $_SESSION['active'] != '')) {
        header ("Location: ../index.php");
    }
?>