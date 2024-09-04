
<?php

class Item {

    public $name;
    public $image;
    public $description;
    public $price; 
    public $release;

    function __construct( $_name, $_image, $_description, $_price, $_release){
        $this->name = $_name;
        $this->image = $_image;
        $this->description = $_description;
        $this->price = $_price;
        $this->release = $_release;

    }
}