
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../Css/sign_in.css">
  <link rel="icon" href="../Css/Images/logo.png">
</head>

<body>

  <div class="login-div">
    <div class="login">
      <div class="app-title">
        <h1>Kaydol</h1>
      </div>
      <form action="add.php" method="post">
        <div class="login-div">
          <div class="input-text">
            <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı/Mail" id="login-name" required>
            <label class="log-field-icon" for="login-name"></label>
          </div>
          <div class="input-text">
            <input type="text" name="phone" class="login-field" placeholder="Telefon Numarası" id="login-phone" required>
            <label class="log-field-icon" for="login-phone"></label>
          </div>
          <div class="input-text">
            <input type="text" name="mail" class="login-field" placeholder="Mail Adresi" id="login-mail" required>
            <label class="log-field-icon" for="login-mail"></label>
          </div>
          <div class="input-text">
            <input type="text" name="password" class="login-field" placeholder="Şifre" id="login-pass" required>
            <label class="log-field-icon" for="login-pass"></label>
          </div>
          <div>
            <button type="submit" name="kayit" class="submit-button">Kaydol</button>
          </div>
        </div>
      </form>
      <a href="login.php"><button class="submit-button">Giriş Yap</button></a>
    </div>
  </div>


</body>

</html>