<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];
// $pass = $_SESSION['pass'];
$_SESSION['email'] = $email;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashboardUser.css">
 

  <title>Multi Auto Sevices</title>
</head>
<body>
<header class="header">
    <nav>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="available_user.php">Available Mechanic</a>
        <a class="nav-left" href="historyUser.php">Appointment History</a>
        <a class="nav-left" href="signIn.php">Sign Out</a>
      </div>
    </nav>
  </header>

  <section class="section-user">
    <form action="booking.php" method="post" class="user-right">
      <br>
      <br>
      <h1>Appointment details</h1>
          <label for="">Phone Number:</label>
          <input required name="phone" placeholder="Phone" type="text">
          <br>
          <label for="">Car Color:</label>
          <input required name="color" placeholder="Color" type="text">
          <br>
          <label for="">Car License Number:</label>
          <input required name="liNum" placeholder="License Number" type="text">
          <br>
        <label for="">Car Engine Number:</label>
          <input required name="enNum" placeholder="Engine Number" type="text">
          <br>
          <label for="">Appointment Date:</label>
          <input required name="date" type="date">
          <br>
          <label for="">Mechanic Id:</label>
          <select name="mecId" class="mechanic" id="cars" name="cars">
          <?php
            $sql1 = "SELECT DISTINCT id FROM mechanic";
            $result1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($result1);
            if($rows>0){
              while($row = mysqli_fetch_assoc($result1) ){
            ?>
              
              <option name="from" value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
              
              <?php } } 
          
          ?>
        </select>
        <br>
        <label for="">Mechanic Name:</label>
          <select class="mechanic" id="cars" name="mecName">
          <br>
          <?php
            $sql1 = "SELECT DISTINCT mecName FROM mechanic";
            $result1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($result1);
            if($rows>0){
              while($row = mysqli_fetch_assoc($result1) ){
            ?>
              
              <option name="from" value="<?php echo $row['mecName'] ?>"><?php echo $row['mecName'] ?></option>
              
              <?php } } 
          
          ?>
        </select>
        <br>
        <br>
        <input class="app-btn" type="submit" value="Make Appointment">
        <br>
        <br>
    </form>
  </section>
</body>
</html>