<?php

class Category extends Item{

    public $category;
    public $icon;

    public function __construct(string $_name, string $_image, string $_description, float $_price, string $_release, string $_category, string $_icon, array $_type,)
    {
        parent::__construct($_name, $_image, $_description, $_price, $_release, $_type);
        $this->category = $_category;
        $this->icon = $_icon;
    }
}