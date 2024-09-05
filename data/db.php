
<?php

require_once __DIR__ . '/../Model/Item.php';
require_once __DIR__ . '/../Model/Category.php';

$db = [
    new Item('Spray repellente', "spray.jpg", 'Lorem ipsum sit amet', 4.50, '2022-01-04', ['generico', 'repellente']),
    new Item('Tapettino assorbente', "tappetino.webp", 'Lorem ipsum sit amet', 3.50, '2022-01-04', ['generico', 'cura']),
    new Category('Catnip', "catnip.jpg", 'Lorem ipsum sit amet', 8.60, '2022-03-02', 'Gatti', "fa-solid fa-cat", ['alimentazione']),
    new Category('Ciotola in acciaio', "ciotola.jpg", 'Lorem ipsum sit amet', 12.60, '2022-07-05', 'Gatti', "fa-solid fa-cat",
        ['Strumenti', 'idratazione', 'alimentazione']),
    new Category('Croccantini per gatti', "croccantini_gatto.jpg", 'Lorem ipsum sit amet', 10.60, '2022-03-11', 'Gatti', "fa-solid fa-cat",
        ['alimentazione', 'cibo solido']),
    new Category('Guinzaglio', "guinzaglio.jpg", 'Lorem ipsum sit amet', 7.30, '2022-03-02', 'Cani', "fa-solid fa-dog",
        ['svago', 'quotidianità']),
    new Category('Snack dentale', "snack_cane.jpg", 'Lorem ipsum sit amet', 15.78, '2023-09-23', 'Cani', "fa-solid fa-cat",
        ['alimentazione', 'cibo solido']),
    new Category('Cuccia piccola', "cuccia_gatti.jpg", 'Lorem ipsum sit amet', 13.23, '2023-09-23', 'Gatti', "fa-solid fa-cat", ['cucce', 'strumenti']),
    new Category('Cuccia grande', "cuccia_grande.jpg", 'Lorem ipsum sit amet', 14.98, '2023-09-23', 'Cani', "fa-solid fa-dog", ['cucce', 'strumenti']),

];