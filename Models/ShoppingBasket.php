<?php
class ShoppingBasket
{
    private $products = [];

    public function add(Products $product)
    {
        $this->products[] = $product;
    }

    public function getTotal()
    {
        // UNA SOLUZIONE
        //$sum = 0;
        // foreach ($this->products as $product){
        //     $sum += $product->price;
        // }
        // return $sum;

        //UN'ALTRA SOLUZIONE con map. trasformare l'array dei prodotti in un array di prezzi 
        $prices = array_map(function ($prod) {
            return $prod->price;
        }, $this->products);
        return array_sum($prices); //la funzione array_sum poi ci da la somma
    }
}
