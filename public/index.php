<?php

    require '../vendor/autoload.php'; // inicia todas las clases
    require '../config/database.php'; // inicia la configuracion bd


    $productos = App\Entities\Product::get();
    
    include "../resources/views/lists.php";