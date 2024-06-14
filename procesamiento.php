<?php
session_start();

// Definir las funciones

//funcion para agregar productos a la lista
function agregarProducto($Nombre, $Cantidad, $Valor, $Modelo) {
    $artefacto[] = [
        'Nombre' => $Nombre,
        'Cantidad' => $Cantidad,
        'Valor' => $Valor,
        'Modelo' => $Modelo
    ];
    return $artefacto;
}

// hacemos una funcion para buscar el producto segun el modelo
function buscarProductoPorModelo($artefacto, $Modelo) {
    foreach ($artefacto as $artefactos) {
        if ($artefactos['Modelo'] == $Modelo) {
            return "Nombre: " . $artefactos['Nombre'] . "<br>";
        }
    }
    return "Modelo no encontrado.<br>";
}

// hacemos una funcion que muestre todos los productos
function mostrarProductos($artefacto) {
    $result = '';
    foreach ($artefacto as $artefactos) {
        $result .= "Nombre: " . $artefactos['Nombre'] . ", Cantidad: " . $artefactos['Cantidad'] . " Valor: ". $artefactos['Valor']. " Modelo: " . $artefactos['Modelo'] . "<br>";

    }
    return $result;
}

?>