<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/signups.css">
  <title>Multi Auto Sevices</title>
</head>
<body>
  <header class="header">
    <nav>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="signIn.php">Back</a>
      </div>
    </nav>
  </header>

  <section class="sec-1">
    <form class="sign-up-main" action="create.php" method = "post" id="login-area">
      <p><br><br></p>
      <h2>Account details</h2>
      <p><br><br></p>
      <h1 class="signup-title">First Name:</h1>
      <input class="input-box" type="text" placeholder="First Name" name = "fname">
      <br>
      <h1 class="signup-title">Last Name:</h1>
      <input class="input-box" type="text" placeholder="Last Name" name = "lname">
      <br>
      <h1 class="signup-title">Date of Birth:</h1>
      <input class="input-box" type="date" placeholder="Birth Date" name = "bdate">
      <br>
      <h1 class="signup-title">Gender:</h1>
      <select class="input-box" name = "gender" placeholder="Select">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
      <br>
      <h1 class="signup-title">Phone Number:</h1>
      <input class="input-box" type="text" placeholder="Phone Number" name = "num">
      <br>
      <h1 class="signup-title">Email:</h1>
      <input class="input-box" type="text" placeholder="Email" name = "email">
      <br>
      <h1 class="signup-title">Password:</h1>
      <input class="input-box" type="password" placeholder="Password" name = "pass">
      <br>
      <p><br><br></p>
      <input class="sbtn" type="submit" value = "Sign Up">
      <p><br><br></p>
    </form>
  </section>
  </body>
</html>