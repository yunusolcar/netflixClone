

<!DOCTYPE html>
<html lang="en">


<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Netflix - Giriş</title>
            <link rel="stylesheet" href="../Css/sign_in.css">
            <link rel="icon" href="../Css/Images/logo.png">
</head>

<body>

<body>
    <div class="navbar" id="navbar">
        <img src="../Css/Images/netflix-logo-png-2564.png" alt="" class="logo" height="25px" style="padding:18px;">
    </div>

            <div class="login-div">
                        <div class="login">
                                    <div class="app-title">
                                                <h1 style="text-align:center;">Giriş Yap</h1>
                                    </div>
                                    <form action="loginCheck.php" method="post">
                                                <div class="login-div">
                                                            <div class="input-text">
                                                                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adınız" id="login-name" required>
                                                                        <label class="log-field-icon" for="login-name"></label>
                                                            </div>
                                                            <div class="input-text">
                                                                        <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass" required>
                                                                        <label class="log-field-icon" for="login-pass"></label>
                                                            </div>
                                                            <div>
                                                                        <button type="submit" name="kayit" class="submit-button">Giriş Yap</button>
                                                            </div>
                                                </div>
                                    </form>
                                  <a href="register.php"><button class="submit-button">Netflix' e Kayıt Ol</button>
                        </div>
            </div>
  
</body>

</html>