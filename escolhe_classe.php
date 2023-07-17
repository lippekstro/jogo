<?php
session_start();

if (isset($_POST['raca'])) {
    $_SESSION['personagem']['raca'] = $_POST['raca'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <p>RAÇA: <?= $_SESSION['personagem']['raca'] ?></p>
    </section>

    <section>
        <form action="rolar_atributos.php" method="POST">
            <button type="submit" name="classe" value="guerreiro">
                Guerreiro
            </button>

            <button type="submit" name="classe" value="mago">
                Mago
            </button>

            <button type="submit" name="classe" value="arqueiro">
                Arqueiro
            </button>
        </form>
    </section>
</body>

</html>