<?php 
    require( 'database.php');

    $mensaje="";
    if(!empty($_POST['email'])   && !empty($_POST["password"])){
        $sql= "INSERT INTO usuarios(email,contraseña) VALUES(:email,:contrasena)";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':email',$_POST['email']);
        $claveSifrada = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $stmt->bindParam(':contrasena',$claveSifrada);


        if ($stmt->execute()){
            $mensaje="Usuario creado";
        }else{
            $mensaje="Usuario no creado";
        }
    }
?>

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
<body>
    <?php require 'partials/header.php'?>
    <?php
        if(!empty($mensaje)): ?>
        <p>
            <?php $mensaje?>
        </p> 
    <?php endif; ?>


    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Tu email">
        <input type="password" name="password" placeholder="Tu contraseña">
        <input type="password" name="confir_password" placeholder="Confirmar contraseña">
        <input type="submit" value="Send">
    </form>
</body>
</html>