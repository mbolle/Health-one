<?php

class Time
{
    public $opening_time;
    public $day;
    public $closing_time;
    public $id;
    public function __construct()
    {
        settype($this->id, 'integer');
    }
}