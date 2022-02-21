<?php 
if( isset($_POST["submit"]) ) {
    if($_POST["name"] == "Danang" && $_POST["password"] == "Danang16") {
        header("Location: home.php");
        exit;
    } else {
        $php_errormsg = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>LOGIN TO ACCESS THE WEB FOR FREE</h1>

        <?php if( isset($error) ) : ?>
            <p class="error">salah username/password cuks!</p>
        <?php endif; ?>

        <div class="login">
            <form action="home.php" method="POST">
                <div class="label">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="label">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" >
                </div>
                <div class="button">
                    <button type="submit" name="submit">Login</button>
                    <a href=""><p style="color: blue;">Forgot Your Password?</p></a>
                </div>
            </form>
        </div>

        
    </div>    
</body>
</html>