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
//var_dump (buscarProductoPorModelo($artefacto, $Modelo));
//funciona perfectamente

// hacemos una funcion que muestre todos los productos
function mostrarProductos($artefacto) {
    $result = '';
    foreach ($artefacto as $artefactos) {
        $result .= "Nombre: " . $artefactos['Nombre'] . ", Cantidad: " . $artefactos['Cantidad'] . " Valor: ". $artefactos['Valor']. " Modelo: " . $artefactos['Modelo'] . "<br>";

    }
    return $result;
}
//var_dump (mostrarProductos($artefacto));
//funciona perfectamente

// hacemos una funcion que actualiza el array artefactos segun el nombre y modelo.
//no sabemos como probarlo,asi que confiamos en que funcione.
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
    return $usuarios;
}

$Nombre = "algo";
$Cantidad = 41;
$Valor = 1500;
$Modelo = "LG";
$artefacto = agregarProducto($Nombre, $Cantidad, $Valor, $Modelo);

?>