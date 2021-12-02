<?php


class Product
{
    public $id;
    public $name;
    public $picture;
    public $description;
    public $category_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->category_id, 'integer');
    }
}