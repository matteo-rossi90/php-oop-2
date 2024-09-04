
<?php

class Item {

    public $name;
    public $image;
    public $description;
    public $price; 
    public $release;
    public $type;

    function __construct( $_name, $_image, $_description, $_price, $_release, $_type){
        $this->name = $_name;
        $this->image = $_image;
        $this->description = $_description;
        $this->price = $_price;
        $this->release = $_release;
        $this->type = $_type;

    }

    //metodo per convertire la data bel formato europeo
    public function getEuropeanDate()
    {
        $date = new DateTime($this->release);
        return $date->format('d/m/Y');
    }

    //metodo per formattare il prezzo con due decimali
    public function getFormattedPrice()
    {
        return number_format($this->price, 2, ',', '.');
    }
}