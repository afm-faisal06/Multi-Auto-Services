<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multi Auto Sevices</title>

    <!-- Home Css file connect -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/availableAdmin.css">

  </head>
  <body>
  <header class="header">
    <nav>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="available_admin.php">Update Mechanic</a>
        <a class="nav-left" href="historyAdmin.php">All Appointment History</a>
        <a class="nav-left" href="signIn.php">Sign Out</a>
      </div>
    </nav>
  </header>

    <!-- section one table -->
    <section class="sec-1">
        <div class="whole-table">
            <div class="title">
                <h1>Available Mechanic</h1>
            </div>
            <div class="table main-td">
                <div class="td-element"><h5>Mechanic Id</h5></div>
                <div class="td-element"><h5>Mechanic Name</h5></div>
                <div class="td-element"><h5>Available</h5></div>
            </div>

            <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from mechanic";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
                <div class="td-element-sub"><h5><?php echo $row['id'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecName'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['available'];?></h5></div>

            </div>

<?php }} ?>
            

        </div>

        <br>
        <br>
        <br>
        <section class="c1">
          <form action="adminEdit1.php" method="post">
            <h1>Add new mechanic</h1>
            <label for="">Mechanic Id:</label>
            <input name="mec_id" type="number">
            <br>
            <label for="">Mechanic Name:</label>
            <input name = "mecName" type="text">
            <br>
            <label for="">Available Slots:</label>
            <input name="available" type="number">
            <br>
            <br>
            <input class="app-btn" type="submit" name = "add" value = "Add">
            <br>
          </form>
        </section>
        <br>
        <br>
        <br>
        <section class="c2">
          <form action="adminEdit2.php" method="post">
            <h1>Modify the mechanic details</h1>
            <label for="">Mechanic Id:</label>
            <input name="mecId" type="number">
            <br>
            <label for="">Mechanic Name:</label>
            <input name = "mec_name" type="text">
            <br>
            <label for="">Available Slots:</label>
            <input name="available_slots" type="number">
            <br>
            <br>
            <input class="app-btn" type="submit" name = "modify" value = "Modify">
          </form>
          <br>
        </section>
        <br>
        <br>
        <br>
        <section class="c3">
          <form action="adminEdit3.php" method="post">
            <h1>Remove the mechanic details</h1>
            <label for="">Mechanic Id:</label>
            <input name="id" type="number">
            <br>
            <br>
            <input class="app-btn" type="submit" name = "delete" value = "Delete">
            <br>
          </form>
        </section>
        </form>
        
    </section>

 </body>
</html>