<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['mec_id']) && isset($_POST['mecName']) && isset($_POST['available'])){
        $id = $_POST['mec_id'];
        $mecName = $_POST['mecName'];
        $available = $_POST['available'];

            $sql_add = "INSERT INTO mechanic VALUES ('$id', '$mecName', '$available')";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
        
    
}
}
?>