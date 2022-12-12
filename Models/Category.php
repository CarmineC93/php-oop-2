<?php

class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function printIcon($name)
    {
        if ($name = "cani") {
            return "/assets/cani.jpg";
        } else if ($name = "gatti") {
            return "/assets/gatti..jpg";
        };
    }
}
