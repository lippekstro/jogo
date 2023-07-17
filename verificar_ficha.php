<?php
session_start();
unset($_SESSION['personagem']['valores_attr']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $forca = htmlspecialchars($_POST['forca']);
    $destreza = htmlspecialchars($_POST['destreza']);
    $inteligencia = htmlspecialchars($_POST['inteligencia']);
    $sabedoria = htmlspecialchars($_POST['sabedoria']);
    $carisma = htmlspecialchars($_POST['carisma']);
    $constituicao = htmlspecialchars($_POST['constituicao']);

    $_SESSION['personagem']['forca'] = $forca;
    $_SESSION['personagem']['destreza'] = $destreza;
    $_SESSION['personagem']['inteligencia'] = $inteligencia;
    $_SESSION['personagem']['sabedoria'] = $sabedoria;
    $_SESSION['personagem']['carisma'] = $carisma;
    $_SESSION['personagem']['constituicao'] = $constituicao;
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
    <section>
        <p>RAÇA: <?= $_SESSION['personagem']['raca'] ?></p>
        <p>CLASSE: <?= $_SESSION['personagem']['classe'] ?></p>

        <table>
            <tr>
                <th>Força</th>
                <th>Destreza</th>
                <th>Inteligencia</th>
                <th>Sabedoria</th>
                <th>Carisma</th>
                <th>Constituicao</th>
            </tr>

            <tr>
                <td><?= $_SESSION['personagem']['forca'] ?></td>
                <td><?= $_SESSION['personagem']['destreza'] ?></td>
                <td><?= $_SESSION['personagem']['inteligencia'] ?></td>
                <td><?= $_SESSION['personagem']['sabedoria'] ?></td>
                <td><?= $_SESSION['personagem']['carisma'] ?></td>
                <td><?= $_SESSION['personagem']['constituicao'] ?></td>
            </tr>
        </table>
    </section>

</body>

</html>