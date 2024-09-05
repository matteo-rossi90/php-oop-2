<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L’e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona 
// della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

require_once __DIR__ . '/Model/Item.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- foglio di stile -->
    <link rel="stylesheet" href="./css/style.css">

    <title>OOP - Shop</title>
</head>

<body>

    <!-- header -->
    <header id="navbar">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <h2 class="white-text">PetShop</h2>
            <ul class="navlist d-flex align-items-center white-text spacing">
                <li>
                    <a href="#">Chi siamo</a>
                </li>
                <li>
                    <a href="#">Prezzi</a>
                </li>
                <li>
                    <a href="#">Informazioni</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- parte relativa alle cards -->
    <div class="container spacing-container">
        <div class="row g-3 py-4">
            <?php foreach ($db as $product): ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">

                    <!-- cards con informazioni -->
                    <div class="card card-box shadow-sm h-100">
                        <img src="./img/<?php echo $product->image ?>" class="card-img-top p-4" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center py-2">
                                <?php echo $product->name ?>
                            </h5>
                            <h6>Descrizione</h6>
                            <p><?php echo $product->description ?></p>

                            <div class="d-flex py-1">
                                <h6>Tipo:</h6>
                                <ul class="px-5">
                                    <?php foreach ($product->type as $tipo): ?>
                                        <li><?php echo $tipo; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="py-1">
                                <?php if (isset($product->category)): ?>
                                    <h4 class="badge rounded-pill text-bg-warning">
                                        <?php echo $product->category ?? '-' ?>
                                        <i class="<?php echo $product->icon ?? '-' ?>"></i>
                                    </h4>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex py-1 align-items-center">
                                <h6 class="py-1">Rilascio:</h6>
                                <span class="px-4"><?php echo $product->getEuropeanDate(); ?> </span>
                            </div>
                            <div class=" d-flex py-1 align-items-center">
                                <h6 class="py-1">Prezzo: </h6>
                                <span class="px-4"> <?php echo $product->getFormattedPrice(); ?> &euro; </span>

                            </div>
                            <div class="py-3 btn-container d-flex justify-content-center align-items-center py">
                                <a href="#" class="btn-info">Acquista ora</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

</body>

</html>