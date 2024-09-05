<?php

require_once __DIR__ . '/Model/Prodoct.php';
require_once __DIR__ . '/Model/CatProduct.php';
require_once __DIR__ . '/Model/DogProduct.php';
require_once __DIR__ . '/data/db.php';

// var_dump($prodotti)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-wrap gap-3 m-5" >
        <?php foreach($prodotti as $prodotto):?>
            <div class="card" style="width: 18rem;">
            <img src="<?php echo $prodotto->img ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $prodotto->getName() ?></h5>
                    <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                    <p class="card-text">Categoria: per <?php echo $prodotto->categoria ?></p>
                    <p class="card-text">Prezzo: <?php echo $prodotto->prezzo ?>€</p>
                    
                </div>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>