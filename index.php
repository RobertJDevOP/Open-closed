<?php 
include_once 'vendor/autoload.php';

use App\CoffeShop;
use App\Menu;
use App\TextMenuOutput;
use App\JsonMenuOutput;


$products = [
    ['id'=>1, 'name'=>'Negro','price'=>25],
    ['id'=>2, 'name'=>'Latte','price'=>35],
    ['id'=>3, 'name'=>'Capuchino','price'=>45]
];

/*Lo que se extiende lo colocamos en una interfaz y volteamos la dependencia
 asi evitaremos  modificar codigo directamente.*/

$shop = new CoffeShop();

$shop->addProducts($products);

$menu = new Menu();
//Open closed


// si mas adelante me piden otro formato puedo crear otra clase que extienda de la interfaz para que el codigo pueda seguir funcionando sin problema
echo $menu->view($shop->getProducts(),new TextMenuOutput());

echo $menu->view($shop->getProducts(),new JsonMenuOutput());


//echo $shop->viewMenu();
