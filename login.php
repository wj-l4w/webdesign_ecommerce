<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>
<body>
    
    
    <p style="text-align: center; font-family: 'Abel', sans-serif; font-size: 25px;"><strong>LOGIN</strong></p>
    
    <br><br>

    <div id="form_box">
        <form action="form.php" method="POST">
            
            <label for="EMAIL">EMAIL</label><br>
            <input class="input_field" name="EMAIL" type="email" size="31" required>

            <br><br>

            <label for="PASSWORD">PASSWORD</label><br>
            <input class="input_field" name="PASSWORD" type="password" size="31" required>
        
            <p>Forgot password?</p>

            <p style="text-align: center;">
                <button id="LoginBacon" type="submit">
                    <img src="Icons/LoginBacon.png" width="230" height="110" alt="submit" />
                </button>
            </p>
        </form>  
    </div>

    <br>
        
    <p style="text-align: center; font-family: 'Abel', sans-serif; font-size: 25px; 
    ">Don't have an account?<br>
    Sign up <u><a href="sign up.php">Here</a></u>.</p>

    <?php

        $emailail = $_POST["MAIL"MAIL"];
        $pswd = $_POST["PASSWORD"];
        echo $EMAILmailail;
        echo $pswd;

    ?>
</body>
</html>