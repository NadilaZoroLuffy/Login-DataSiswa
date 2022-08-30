<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style-4.css">
</head>
<body>
    <div class="kotak_login">
        <h2>Nadyl Store</h2>
        <h3>Regist Your Accout</h3>

    <form action="login.php" method="post">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="emails">Email</label>
        <input type="text" name="emails" id="emails" class="form-control">

        <label for="password">Password</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <button type="submit" class="btn-login" name="submit">Register</button>
    </form>
    </div>
</body>
</html>