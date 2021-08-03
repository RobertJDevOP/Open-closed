<?php

namespace App;

class CoffeShop {

    protected $products = [];

    
    public function addProducts($product = []){

         $this->products = $product;
    }

    public function getProducts(){

        return $this->products;
    }

    public function RemoveProducts($id){

       //Logica borrar product
    }

    // este metodo no pertene a coffe shop , asi que en el primer principio
    // se debe crear la clase menu

    /*public function viewMenu(){

        $menu='';
        $menu.="ID\tNombre\t\Precio\n";
        $menu.= str_repeat('=',30)."\n";

        foreach ($this->products as $product){
            $menu .= $product['id']. "\t"
            . str_pad($product['name'],15,' ')."\t"
            . $product['price']. "\n";
        }

        return $menu;
    }*/
}


?>