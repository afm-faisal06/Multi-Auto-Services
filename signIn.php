<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/signin.css">
  <title>Multi Auto Sevices</title>
</head>
<body>
<header class="header">
    <nav>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="signUp.php">Create Account</a>
      </div>
    </nav>
  </header>

  <section class="section-signin">
    <form id="login-area" action="logIn.php" method = "post">
      <br>
      <h1 class="text-center">
            Sign In
      </h1>
      <label>Email:</label>
      <input class="input-box" type="text" placeholder="Email" name = "email">
      <br>
      <label>Password:</label>
      <input class="input-box" type="password" placeholder="Password" name = "pass">
      <br>
      <p><br></p>
      <input class="log-btn" type="submit" value = "Sign In">
      <p><br><br></p>
    </form>
  </section>
</body>
</html>