<?php

class Review
{
    public $id;
    public $product_id;
    public $name;
    public $rating;
    public $description;
    public $date;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}