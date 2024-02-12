<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if (isset($_POST['delete']) == 'Delete') {
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }

        $sql_add = "DELETE from mechanic where id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");

}
?>