<?php include 'bebidasConfig.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    <link rel="stylesheet" href="/css/bebidas.css"/>
</head>
<body>
    <?php include 'menu.php';?>
    
    <div class="content" id="content">
        <?php $i = 0; foreach ($bebidas as $item): ?>
            <div class="item">
                <div class="img">
                    <img src=" <?php echo $fotos[$i]; $i ++; ?> ">
                </div>

                <div class="desc">
                    <?php foreach ($item as $outro): ?>
                        <p><?php echo $outro; ?></h1>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>