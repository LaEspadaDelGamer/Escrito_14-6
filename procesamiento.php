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

// hacemos una funcion que actualiza el array artefactos segun el nombre y modelo.
function actualizarProducto($artefacto, $Nombre, $Cantidad, $Valor, $Modelo) {
    foreach ($artefacto as &$artefactos) {
        if ($artefactos['Nombre'] == $Nombre && $artefactos['Modelo'] == $Modelo) {
            $artefactos['Nombre'] = $Nombre;
            $artefactos['Cantidad'] = $Cantidad;
            $artefactos['Valor'] = $Valor;
            $artefactos['Modelo'] = $Modelo;
            break;
        }
    }
    return $artefactos;
}

// incluimos una funcion que calcula la cantidad por el valor de todos los productos
function calcularValorTotal($artefacto){
    $total = 0;
    foreach ($artefacto as $artefactos) {
       $total = $total + $artefactos['Valor'] * $artefactos['Cantidad'];

    }
    return $total;
}
// incluimos una funcion que filtra los productos segun el valor que le agregamos
function filtrarProductosPorValor($artefacto, $RangoM){
    
    foreach ($artefacto as $artefactos) {
        
      if($artefactos['Valor'] > $RangoM){
        echo "Nombre: ", $artefactos['Nombre'], " Valor: " ,$artefactos['Valor'], " Cantidad: ", $artefactos['Cantidad'], " Modelo: ", $artefactos['Modelo'], "<br>";
      }
      
    }
    
}

// hacer una funcion la cual nos lista todos y cada uno de los modelos disponibles.
function listarModelosDisponibles($artefacto) {
    $result = '';
    foreach ($artefacto as $artefactos) {
        $result .= $artefactos['Modelo'] . "<br>";

    }
    return $result;
}

//mirar si incluir una variable total y otra para el rangoM.

?>