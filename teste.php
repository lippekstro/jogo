<?php
require_once "dados.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dado'])) {
    $dado = $_POST['dado'];
    sleep(3);
    $valor = Dados::rolar($dado);
    if ($valor == $dado) {
        $critico = true;
    } else if ($valor == 1) {
        $erro_critico = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section id="resultado">

        <span id="loader"></span>

        <?php if (isset($valor)) : ?>
            <h1 id="exibe">Rolou <?= $valor ?></h1>
            <?php if (isset($critico) && $critico) : ?>
                <p id="critico">ATAQUE CRITICO</p>
            <?php elseif (isset($erro_critico) && $erro_critico) : ?>
                <p id="erro-critico">ERRO CRITICO</p>
            <?php endif; ?>
        <?php endif; ?>
    </section>


    <section id="dados">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="showLoader()">
            <button type="submit" name="dado" value="20" class="btn-dado">
                <img src="imgs/vinte.svg" alt="">
            </button>

            <button type="submit" name="dado" value="12" class="btn-dado">
                <img src="imgs/doze.svg" alt="">
            </button>

            <button type="submit" name="dado" value="8" class="btn-dado">
                <img src="imgs/oito.svg" alt="">
            </button>

            <button type="submit" name="dado" value="6" class="btn-dado">
                <img src="imgs/seis.svg" alt="">
            </button>
        </form>
    </section>


    <script>
        function showLoader() {
            document.getElementById("loader").style.display = "block";
            document.getElementById("exibe").style.display = "none";
        }
    </script>

</body>

</html>