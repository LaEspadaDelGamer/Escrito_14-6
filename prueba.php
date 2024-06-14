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
$Nombre = "algo";
$Cantidad = 41;
$Valor = 1500;
$Modelo = "LG";
echo " 1 ", $Nombre, " 2 ", $Cantidad, " 3 ", $Valor, " 4 ", $Modelo, "<br> 5 ";
var_dump (agregarProducto($Nombre, $Cantidad, $Valor, $Modelo));
// funciona perfectamente

?>