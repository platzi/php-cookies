<?php

function caminito2() {
    return 20 / 0;
}

function caminito() {
    return caminito2();
}

function division() {
    return caminito();
}

try {
    
    $resultado = division();
    echo $resultado;

} catch (Throwable $e) {

    // echo $e->getMessage();
    // echo $e->getCode();
    // echo $e->getFile();
    // echo $e->getLine();

    echo "<pre>";
    var_dump($e->getTrace());
    echo "</pre>";

}