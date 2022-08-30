<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "adminsmkjp1"){
        header('Location: siswa.php');
    }else if(empty($_POST["username"] && $_POST["password"])){
        $kosongInput = true;
    }else{
        $error = true;
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
    <div class="kotak_login">
        <h2>Nadyl Store</h2>
        <h3>Login Your Accout</h3>

<?php if(isset($kosongInput)) : ?>
    <p style="color: red; font-style: italic; text-align: center;">Username atau Passwword Belum Dimasukkan</p>
    <?php endif; ?>

<?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic; text-align: center;">Username atau Passwword Salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <button type="submit" class="btn-login" name="submit">login</button>
    </form>
    <div class="register">
        <small>Belum Punya Akun?<br>
        <a href="register.php">Register</a></small>
    </div>
    </div>
</body>
</html>