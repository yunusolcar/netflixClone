
<!DOCTYPE html>
<html lang="en">

<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sign In</title>
            <link rel="stylesheet" href="../Css/sign_in.css">
            <link rel="icon" href="../Css/Images/logo.png">
</head>

<body>

<div class="login-div">
            <div class="login">
                        <div class="app-title">
                                    <h1>Giriş</h1>
                        </div>
            <form action="islem.php" method="post">            
            <div class="login-div">
                        <div class="input-text">
                                    <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı/Mail" id="login-name">
                                    <label class="log-field-icon" for="login-name"></label>
                        </div>
                        <div class="input-text">
                                    <input type="text" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                                    <label class="log-field-icon" for="login-pass"></label>
                        </div>
                        <button name="giris" class="submit-button">Giriş Yap</button>
            </div>
            </form>
            <a href="kayit.php"><button  class="submit-button">Kaydol</button></a>
            </div>
</div>











</body>
</html>