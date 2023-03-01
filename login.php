<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
</head>
<body>
    <?php require 'partials/header.php'?>
    <h1>Login</h1>
    <span>or <a href="signup.php">Login</a></span>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Tu email">
        <input type="password" name="password" placeholder="Tu contraseña">
        <input type="submit" value="Send">
    </form>
</body>
</html>