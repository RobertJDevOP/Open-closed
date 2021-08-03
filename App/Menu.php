<?php

namespace App;

class Menu {

    public function view($products,MenuOutput $output){
        // no lo modificaremos... crearemos una interfaz.
        return $output->output($products);
    }

}


?>