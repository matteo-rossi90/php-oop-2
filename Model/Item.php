
<?php

class Item {

    protected $name;
    public $image;
    public $description;
    protected $price; 
    public $release;
    public $type = [];

    function __construct( string $_name, string $_image, string $_description, float $_price, string $_release, array $_type){
        $this->setName($_name);
        $this->image = $_image;
        $this->description = $_description;
        $this->setPrice($_price);
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

    //metodo per impostare i controlli che riguardano il parametro "$name"
    public function setName($name){
        if(empty($name) || strlen($name) < 4){ //se non è presente il nome o ha una lunghezza inferiore a 4 caratteri
            throw new Exception ('Il nome del prodotto deve avere almeno quattro caratteri'); //compare il messaggio di errore
        }
        $this->name = $name;
    }

    //metodo per ottenere il parametro "$name"
    public function getName(){
        return $this->name;
    }

    //metodo per impostare i controlli che riguardano il parametro "$price"
    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) { //se il prezzo non è un numero o è negativo
            throw new Exception('Il prezzo deve essere un numero positivo'); //compare il messaggio di errore
        }
        $this->price = $price;
    }

    //metodo per ottenere il parametro "$price"
    public function getPrice()
    {
        return $this->getFormattedPrice();
    }

}