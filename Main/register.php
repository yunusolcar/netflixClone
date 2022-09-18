
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../Css/login_register.css">
  <link rel="icon" href="../Css/Images/logo.png">
</head>

<body>
<div class="navbar" id="navbar">
        <img src="../Css/Images/netflix-logo-png-2564.png" alt="" class="logo" height="25px" style="padding:18px;">
    </div>
  <div class="login-div">
    <div class="login">
      <div class="app-title">
        <h1>Sign Up</h1>
      </div>
      <form action="add.php" method="post">
        <div class="login-div">
          <div class="input-text">
            <input type="text" name="username" class="login-field" placeholder="Fullname" id="login-name" required>
            <label class="log-field-icon" for="login-name"></label>
          </div>
          <div class="input-text">
            <input type="text" name="phone" class="login-field" placeholder="Phone Number" id="login-phone" required>
            <label class="log-field-icon" for="login-phone"></label>
          </div>
          <div class="input-text">
            <input type="text" name="mail" class="login-field" placeholder="E-mail" id="login-mail" required>
            <label class="log-field-icon" for="login-mail"></label>
          </div>
          <div class="input-text">
            <input type="password" name="password" class="login-field" placeholder="Password" id="login-pass" required>
            <label class="log-field-icon" for="login-pass"></label>
          </div>
          <div>
            <button type="submit" name="add" class="submit-button">Sign Up</button>
          </div>
        </div>
      </form>
      <a href="login.php"><button class="submit-button">Sign In</button></a>
    </div>
  </div>


</body>

</html>