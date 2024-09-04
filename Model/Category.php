<?php

class Category extends Item{

    public $category;

    public function __construct($_name, $_image, $_description, $_price, $_release, $_category,$_type,)
    {
        parent::__construct($_name, $_image, $_description, $_price, $_release, $_type);
        $this->category = $_category;
    }
}