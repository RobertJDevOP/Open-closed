<?php 
namespace App;

class JsonMenuOutput implements MenuOutput{
    public function output($products){
       
        return $menu = json_encode($products);
    }
}