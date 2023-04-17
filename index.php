<?php
require_once __DIR__."/models/Prodotto.php";
require_once __DIR__."/models/Cibo.php";
require_once __DIR__."/models/Altro.php";

$prova=new Cibo(19.99,"cane","scatola",400,['pane','acqua']);
//var_dump($prova);
$prova2=new Altro(19.99,"cane","scatola","legno","500 x 400");
//var_dump($prova2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg p-5">
        <h1 class="text-center">Lista Prodotti</h1>
        <div class="row gy-2">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="https://picsum.photos/200/300" class="card-img-top w-100" style="max-heigth: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prova->getNome(); ?></h5>
                        <p class="card-text"><?php echo $prova->getAnimale(); ?></p>
                        <p class="card-text">Prezzo: <?php echo $prova->getPrezzo(); ?></p>
                        <p class="card-text">Peso: <?php echo $prova->getPeso(); ?></p>
                        <p class="card-text">Ingredienti: <?php echo implode(",", $prova->getIngredienti()); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="https://picsum.photos/200/300" class="card-img-top w-100" style="max-heigth: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prova2->getNome(); ?></h5>
                        <p class="card-text"><?php echo $prova2->getAnimale(); ?></p>
                        <p class="card-text">Prezzo: <?php echo $prova2->getPrezzo(); ?></p>
                        <p class="card-text">Materiale: <?php echo $prova2->getMateriale(); ?></p>
                        <p class="card-text">Dimensioni: <?php echo $prova2->getDimensioni(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>