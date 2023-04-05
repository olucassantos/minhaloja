<?php
    require 'importa.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Roupas</title>
    </head>
    <body>
        <?php
            $roupas = listaDados('SELECT * FROM roupas');

            foreach ($roupas as $roupa) { ?>
                <div>
                    <h2><?php echo $roupa['nome']; ?></h2>
                    <p><?php echo $roupa['cor']; ?></p>
                    <p><?php echo $roupa['preco']; ?></p>
                    <a href="ver.php?id=<?= $roupa['id']; ?>">Ver</a>
                </div>
            <?php } ?>
    </body>
</html>