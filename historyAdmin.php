<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multi Auto Sevices</title>

    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/history_admin.css">

  </head>
  <body>
  <header class="header">
    <nav>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="available_admin.php">Update Mechanic Details</a>
        <a class="nav-left" href="historyAdmin.php">Appointment History</a>
        <a class="nav-left" href="home.php">Sign Out</a>
      </div>
    </nav>
  </header>

    <!-- section one table -->
    <section class="sec-1">
        <div class="whole-table">
            <div class="title">
                <h1><?php
                require_once('DBconnect.php');
                session_start();
                $email = $_SESSION['email'];
                if ($email === "admin1@gmail.com") {
                  echo "Appointment History";
                }else{
                  echo "Your History";
                }
                ?></h1>
            </div>
            <div class="table main-td">
            <div class="td-element"><h5>Serial Number</h5></div>
                <div class="td-element"><h5>Name</h5></div>
                <div class="td-element"><h5>Phone</h5></div>
                <div class="td-element"><h5>Engine Number</h5></div>
                <div class="td-element"><h5>Appointment Date</h5></div>
                <div class="td-element"><h5>Mechanic Id</h5></div>
                <div class="td-element"><h5>Mechanic Name</h5></div>
            </div>

            <?php
            // require_once('DBconnect.php');
            // session_start();
            // $email = $_SESSION['email'];
            if ($email === "admin1@gmail.com") {
              $sql_table = "SELECT * from appointment";
            }else{
              $sql_table = "SELECT * from appointment where email = '$email'";
            }
            
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
            <div class="td-element-sub"><h5><?php echo $row['row'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['client'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['phone'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['enNum'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['date'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecId'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecName'];?></h5></div>
            </div>

<?php }} ?>
            

        </div>
        <br>
        <br>
        <br>
        <section class="bottom-part">
          <br>
          <h1>Delete Appointment</h1>
          <br>
          <form action="delete.php" method="post">
            <label for="">Serial Number:</label>
            <input required name="row" placeholder="Enter Serial Number" type="number">
            <br>
            <label for="">Mechanic Id:</label>
            <input required name="id" placeholder="Enter Mechanic Id" type="number">
            <br>
            <input class="app-btn" type="submit" value="Submit">
            <br>
          </form>
        </section>
        <br>
        <br>
        <br>
        <section class="edit-part">
          <br>
          <h1>Change Appointment Details</h1>
          <br>
          <form action="adminChange.php" method="post">
            <label for="">Serial Number:</label>
            <input required placeholder = "Enter Serial Number" name="rowName" type="number">
            <br>
            <label for="">Mechanic Name:</label>
            <input required placeholder = "Enter Mechanic Name" name = "mecName" type="text">
            <br>
            <label for="">Appointment Date:</label>
            <input required name="appointment" type="date">
            <br>
            <label for="">Mechanic Id:</label>
            <input required name="mecId" type="number" placeholder="Enter Mechanic Id">
            <br>
            <br>
            <input class="app-btn" type="submit" name = "modify" value = "Modify">
            <br>
            <br>
          </form>
        </section>
    </section>

 </body>
</html>