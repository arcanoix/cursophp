<?php

    require '../vendor/autoload.php'; // inicia todas las clases
    require '../config/database.php'; // inicia la configuracion bd

    ob_start(); // funcion de php que captura una salida y mantiene los datos en el buffer 

    $productos = App\Entities\Product::get();
    
    include "../resources/views/lists.php";

    $dompdf = new Dompdf\Dompdf();

    $dompdf->loadHtml(ob_get_clean()); // obtiene el buffer actual y luego deja el buffer vacio

    $dompdf->render();
    $dompdf->stream();