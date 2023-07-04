<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Programacion</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src=script.js></script>
  </head>
  
  <body>
        <!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $Fecha = $_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $Humedad = $_POST["Humedad"];

        // Validar los datos (puedes agregar tus propias validaciones aquí)

        // Procesar los datos
        // En este ejemplo, simplemente mostramos los datos recibidos
        echo "<h2>Información recibida:</h2>";
        echo "Fecha: " . $Fecha . "<br>";
        echo "Hora: " . $Hora . "<br>";
        echo "Humedad: " . $Humedad . "<br>";
    }
    ?>
    
    <h2>Formulario de contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Fecha">Fecha:</label>
        <input type="text" name="Fecha" required><br><br>

        <label for="Hora">Hora:</label>
        <input type="Hora" name="email" required><br><br>

        <label for="Humedad">Humedad:</label>
        <textarea name="mensaje" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
    <div id="encabezado">
        <h1>Proyecto de Programacion</h1>
    </div> 
    <hr>
    <center>
    <table>
      <tr>
        <th><a href="index.php">Volver al inicio</a></th>
        <th><a href="luminosidad.php">Ver mediciones<br>de luminosidad</a></th>
        <th><a href="ultrasonido.php">Ver eventos<br>detectados</a></th>
      </tr>
    </table>
    </center>
<div id="Niveles de humedad">    
<p><b>Niveles de humedad</b></p>
      
<p>Temperatura o Clima<br>
<br>
Esta podría variar depende la ubicación del humedal. Por lo general estos se caracterizan por poseer un clima lluvioso o frío, con temperaturas entre 25 o 30 grados centígrados.<br>
Humedad<br>
  <br>
<br>
La humedad indica la cantidad de vapor de agua presente en el aire. Depende, en parte, de la temperatura, ya que el aire caliente contiene más humedad que el frío. En el caso de los humedales esta se manifiesta mas ya que en la zona predomina el agua.<br>
Radiación solar<br>
  <br>
<br>
Se ha determinado científicamente por expertos químicos y botánicos que la incidencia de la radiación solar es otro de los factores que contribuyen al deterioro de los humedales, ríos, lagunas, entre otros.<br>
  <br>
Evaporación<br>
<br>
Esta no solo se encuentra en los humedales, sino que también en océanos y lagos. Se manifiesta debido a la influencia de la luz del sol sobre el agua produciendo el calentamiento de esta. Como resultado de esto se evaporará y será transportada de nuevo a la atmósfera. Allí formará las nubes que con el tiempo causarán la precipitación devolviendo el agua otra vez a la tierra. La evaporación de los océanos es la clase más importante de evaporación.<br>
  <br>
Precipitación<br>
<br>
La precipitación es unos de los eventos climáticos que no solo se encuentran en los humedales si no que también en aquellos espacios geográficos donde el transporte de agua hacia el interior de las nubes provoque el movimiento circular y que como resultado de la gravedad cae en la tierra condensada como agua. Este fenómeno se llama lluvia o precipitación.</p>
    <table>
    <tr>
      <th>Fecha</th>  
      <th>Hora</th>
      <th>Humedad suelo</th>
    </tr>
    
</body> 
</html>



































      
<meta charset="utf-8">
<style type="text/css">
body{
  background-color:
  



