<?php
session_start();
$resultado = '';

// Verificar si hay un resultado almacenado en la sesión
if (isset($_SESSION['resultado'])) {
    $resultado = $_SESSION['resultado'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escrito</title>
</head>
  <!-- Creamos el body con todas las funciones y variables a usar, para despues usarlas con el session -->
<body>
    <form action="procesamiento.php" method="POST"> 

        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre"><br>
        
        <label for="Cantidad">Cantidad</label>
        <input type="number" id="Cantidad" name="Cantidad"><br>

        <label for="Valor">Valor:</label>
        <input type="number" id="Valor" name="Valor"><br>
        
        <label for="Modelo">Modelo:</label>
        <input type="text" id="Modelo" name="Modelo"><br>

        <input type="radio" id="agregar" name="accion" value="agregar">
        <label for="agregar">Agregar Producto</label><br>

        <input type="radio" id="Buscar" name="accion" value="Buscar">
        <label for="Buscar">Buscar por modelo</label><br>

        <input type="radio" id="Mostrar" name="accion" value="Mostrar">
        <label for="Mostrar"> Mostrar Productos</label><br>

        <input type="radio" id="Actualizar" name="accion" value="Actualizar">
        <label for="Actualizar">Actualizar Producto</label><br>

        <input type="radio" id="CalcularT" name="accion" value="CalcularT">
        <label for="CalcularT">Calcular Valor Total</label><br>

        <input type="radio" id="Filtrar" name="accion" value="Filtrar">
        <label for="Filtrar">Filtrar Productos por Valor</label><br>

        <input type="radio" id="Listar" name="accion" value="Listar">
        <label for="Listar">Listar Modelos Disponibles</label><br>

        <input type="radio" id="CalcularP" name="accion" value="CalcularP">
        <label for="CalcularP">Calcular Valor Promedio</label><br>

        <input type="submit" value="Enviar">
    </form>

    <!-- Incluimos una funcion que limpia los resultados ingresados -->
    <form action="procesamiento.php" method="POST">
        <input type="hidden" name="accion" value="limpiar">
        <input type="submit" value="Limpiar Resultados">
    </form>

    <div id="resultados">
    <?php echo $resultado; 
   
    ?>
    
    </div>

    
</body>
</html>