<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Giriş</title>
    <link rel="stylesheet" href="../Css/login_register.css">
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
                    <h1 style="text-align:center;">Sing In</h1>
                </div>
                <form action="loginCheck.php" method="post">
                    <div class="login-div">
                        <div class="input-text">
                            <input type="text" name="username" class="login-field" placeholder="Name or E-Mail" id="login-name" required>
                            <label class="log-field-icon" for="login-name"></label>
                        </div>
                        <div class="input-text">
                            <input type="password" name="password" class="login-field" placeholder="Password" id="login-pass" required>
                            <label class="log-field-icon" for="login-pass"></label>
                        </div>
                        <div>
                            <button type="submit" name="kayit" class="submit-button">Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="signup">
                   New to Netflix?    
                        <a href="register.php" style="color:white">Sign up now.</a>
                    </div>
                    <div class="more">
                    <p style="font-size:15px; color:gray">
                        This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a> 
                    </p>
                </div>
                </div>
            </div>
        </div>





    </body>

</html>