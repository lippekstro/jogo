<?php
session_start();

if(isset($_POST['nome'])){
    $_SESSION['personagem']['nome'] = htmlspecialchars($_POST['nome']);
}


var_dump($_SESSION['personagem'])




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>