<?php

    include_once("connection.php");
    
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM task WHERE id = $id");

    header("location:viewTask.php");

?>