<?php

class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function printIcon()
    {
        if ($this->name === "cani") {
            $result = "./assets/cane.jpg";
        } elseif ($this->name === "gatti") {
            $result = "./assets/gatti.jpg";
        };

        return $result;
    }
}
