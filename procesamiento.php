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


// Inicializar el array de usuarios en la sesión
if (!isset($_SESSION['artefacto'])) {
    $_SESSION['artefacto'] = [];
}

$artefacto = $_SESSION['artefacto'];
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['accion'];
    $Nombre = $_POST['Nombre'] ?? '';
    $Cantidad = $_POST['Cantidad'] ?? '';
    $Valor = $_POST['Valor'] ?? '';
    $Modelo = $_POST['Modelo'] ?? '';


    switch ($accion) {
        case 'Agregar':
            $usuarios = agregarProducto($Nombre, $Cantidad, $Valor, $Modelo);
            $resultado = "Usuario agregado correctamente.<br>";
            break;
        
        case 'Buscar':
            $resultado = buscarProductoPorModelo($artefacto, $Modelo);
            break;
        
        case 'Mostrar':
            $resultado = mostrarProductos($artefacto);
            break;
        
        case 'Actualizar':
            $artefacto = actualizarProducto($artefacto, $Nombre, $Cantidad, $Valor, $Modelo);
            $resultado = "Usuario actualizado correctamente.<br>";
            break;

        case 'CalcularT':
            $resultado = calcularValorTotal($artefacto);
            break;

        case 'Filtrar':
            $resultado = filtrarProductosPorValor($artefacto, $RangoM);
            break;

        case 'Listar':
            $artefacto = listarModelosDisponibles($artefacto);
            $resultado = "Modelo listado correctamente.<br>";
            break;


        case 'limpiar':
            $_SESSION['usuarios'] = [];
            $resultado = "Resultados limpiados correctamente.<br>";
            session_destroy();
            break;

        default:
            $resultado = "Acción no válida.";
    }

    $_SESSION['artefacto'] = $artefacto;
    $_SESSION['resultado'] = $resultado;
}

// Redirigir de vuelta a index.php
header("Location: formulario.php");
exit();
?>
