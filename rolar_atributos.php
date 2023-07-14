<?php
require_once 'dados.php';
session_start();

if (isset($_POST['classe'])) {
    $_SESSION['personagem']['classe'] = $_POST['classe'];
}


if (isset($_GET['attr'])) {
    $valores = array(Dados::rolar(20), Dados::rolar(20), Dados::rolar(20), Dados::rolar(20), Dados::rolar(20), Dados::rolar(20));
    $_SESSION['personagem']['valores_attr'] = $valores;
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
        <p>CLASSE: <?= $_SESSION['personagem']['classe'] ?></p>
    </section>

    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <button type="submit" name="attr">
                Rolar Atributos
            </button>
        </form>
    </section>

    <?php if (isset($valores)) : ?>
        <section>
            <?php foreach ($valores as $atr) : ?>
                <p><?= $atr ?></p>
            <?php endforeach; ?>
        </section>

        <section>
            <form action="distribuir_pontos.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>

                <button type="submit">
                    Aceitar e Continuar
                </button>
            </form>
        </section>
    <?php endif; ?>
</body>

</html>