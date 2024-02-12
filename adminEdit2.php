<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['mecId']) && isset($_POST['mec_name']) && isset($_POST['available_slots'])){
        $id = $_POST['mecId'];
        $mecName = $_POST['mec_name'];
        $available = $_POST['available_slots'];
        $sql_add = "UPDATE mechanic set id = '$id', mecName = '$mecName', available= '$available' where id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
    }
}
?>