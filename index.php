<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L’e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona 
// della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

require_once __DIR__ . '/Model/Item.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- foglio di stile -->
    <link rel="stylesheet" href="./css/style.css">

    <title>OOP - Shop</title>
</head>

<body>

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

    <div class="container spacing-container">
        <div class="row g-3 py-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-box shadow-sm h-100">
                        <!-- <img src="..." class="card-img-top p-4" alt="..."> -->
                        <div class="card-body p-4">
                            <h4 class="card-title text-center py-2">
                                title
                            </h4>
                            <div class="d-flex justify-content-between spacing">
                                <div class="col py-2">
                                    <h5 class="text-center">Tipo prodotto</h5>
                                    <ul class="text-center">
                                    </ul>
                                </div>
                                <div class="col py-2">
                                    <h5 class="text-center">Tipo di animale</h5>
                                    <ul class="text-center">
                                    </ul>
                                </div>
                            </div>
                            <h5 class="py-2"></h5>
                            <h5 class="py-2"></h5>
                            <div class="btn-container d-flex justify-content-center align-items-center py">
                                <a href=" #" class="btn-info">Altre informazioni</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

</body>

</html>