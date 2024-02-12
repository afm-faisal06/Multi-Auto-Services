<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['phone']) && isset($_POST['color']) && isset($_POST['mecId']) && isset($_POST['liNum']) && isset($_POST['enNum']) && $_POST['date'] && $_POST['mecName']){
    $phone = $_POST['phone'];
    $color = $_POST['color'];
    $mecId = $_POST['mecId'];
    $liNum = $_POST['liNum'];
    $enNum = $_POST['enNum'];
    $date = $_POST['date'];
    $mecName = $_POST['mecName'];
    $sql_new = "SELECT f_name, l_name FROM user WHERE Email = '$email'";
    $result_new = mysqli_query($conn, $sql_new);
    $row_new = mysqli_fetch_assoc($result_new);
    $name= $row_new['f_name'] . " " . $row_new['l_name'];
    $sql_check = "SELECT available from mechanic WHERE id = '$mecId' AND mecName = '$mecName'";

    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) != 0) {
        while($row_check = mysqli_fetch_assoc($result_check) ){
            $available = $row_check['available']-1;
        }
      }
    if (isset($available)) {
      if ($available < 0) {
        header("Location: dashboardUser.php");
      } else{
        $sql_available = "UPDATE mechanic set available = $available where id = '$mecId'";
  
        mysqli_query($conn, $sql_available);

        $sql = "SELECT COUNT(*) as count FROM appointment";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total = $row["count"] + 1;
  
        $sql_history = "INSERT INTO appointment VALUES ('$name', '$phone', '$color', '$mecId', '$liNum', '$enNum', '$date', '$mecName', '$email', '$total')";
  
        mysqli_query($conn, $sql_history);
        header("Location: historyUser.php");
      }
    } else{
      header("Location: dashboardUser.php");
    }


}  
?>
