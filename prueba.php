<?php
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

// echo " 1 ", $Nombre, " 2 ", $Cantidad, " 3 ", $Valor, " 4 ", $Modelo, "<br> 5 ";
// var_dump (agregarProducto($Nombre, $Cantidad, $Valor, $Modelo));
// funciona perfectamente

// hacemos una funcion para buscar el producto segun el modelo
function buscarProductoPorModelo($artefacto, $Modelo) {
    foreach ($artefacto as $artefactos) {
        if ($artefactos['Modelo'] == $Modelo) {
            return "Nombre: " . $artefactos['Nombre'] . "<br>";
        }
    }
    return "Modelo no encontrado.<br>";
}



$Nombre = "algo";
$Cantidad = 41;
$Valor = 1500;
$Modelo = "LG";
$artefacto = agregarProducto($Nombre, $Cantidad, $Valor, $Modelo);
//var_dump (buscarProductoPorModelo($artefacto, $Modelo));
//funciona perfectamente
?>