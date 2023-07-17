<?php
session_start();

if (isset($_POST['nome'])) {
    $_SESSION['personagem']['nome'] = htmlspecialchars($_POST['nome']);
}


$atributos = $_SESSION['personagem']['valores_attr'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <h1 style="text-align: center;"><?= $_SESSION['personagem']['nome'] ?></h1>
        <p>RAÇA: <?= $_SESSION['personagem']['raca'] ?></p>
        <p>CLASSE: <?= $_SESSION['personagem']['classe'] ?></p>
    </section>

    <section class="atributos">
        <?php foreach ($atributos as $a) : ?>
            <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p ondragstart="dragStart(event)" draggable="true" id="dragtarget"><?= $a ?></p>
            </div>
        <?php endforeach; ?>
    </section>


    <form action="verificar_ficha.php" method="POST">
        <div class="form-attr">
            <div class="form-item">
                <label for="forca">Forca</label>
                <input type="text" name="forca" id="forca" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

            <div class="form-item">
                <label for="destreza">Destreza</label>
                <input type="text" name="destreza" id="destreza" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

            <div class="form-item">
                <label for="inteligencia">Inteligencia</label>
                <input type="text" name="inteligencia" id="inteligencia" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

            <div class="form-item">
                <label for="sabedoria">Sabedoria</label>
                <input type="text" name="sabedoria" id="sabedoria" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

            <div class="form-item">
                <label for="carisma">Carisma</label>
                <input type="text" name="carisma" id="carisma" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

            <div class="form-item">
                <label for="constituicao">Constituicao</label>
                <input type="text" name="constituicao" id="constituicao" ondrop="drop(event, this)" ondragover="allowDrop(event)" draggable="true" required readonly>
            </div>

        </div>

        <div class="form-item">
            <input type="submit" value="enviar">
        </div>
    </form>

    </div>


    <script>
        function dragStart(event) {
            event.dataTransfer.setData("Text", event.target.id);
        }

        function allowDrop(event) {
            event.preventDefault();
        }

        function drop(event, campo) {
            event.preventDefault();
            const data = event.dataTransfer.getData("Text");
            const draggedItem = document.getElementById(data);
            campo.value = draggedItem.textContent;
            draggedItem.remove();
        }
    </script>
</body>

</html>