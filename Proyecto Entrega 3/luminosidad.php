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
        $Luminosidad = $_POST["Luminosidad"];

        // Validar los datos (puedes agregar tus propias validaciones aquí)

        // Procesar los datos
        // En este ejemplo, simplemente mostramos los datos recibidos
        echo "<h2>Información recibida:</h2>";
        echo "Fecha: " . $Fecha . "<br>";
        echo "Hora: " . $Hora . "<br>";
        echo "Luminosidad: " . $Luminosidad . "<br>";
    }
    ?>
    
    <h2>Formulario de contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Fecha">Fecha:</label>
        <input type="text" name="Fecha" required><br><br>

        <label for="Hora">Hora:</label>
        <input type="Hora" name="email" required><br><br>

        <label for="Luminosidad">Luminosidad:</label>
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
       <th><a href="humedad.php">Ver mediciones<br>de humedad</a></th>
        <th><a href="index.php">Volver al inicio</a></th>
        <th><a href="ultrasonido.php">Ver eventos<br>detectados</a></th>
      </tr>
    </table>
    </center>
<div id="Niveles de luz">    
<p><b>Niveles de Lumisocidad</b></p>
      
<p>Control de luz<br>
<br>
Esta podría variar dependiendo de la hora del dia hacindo que te lleguedistina infomacion para que sepas el lugar u hora mas aceptable para poner las plantas<br>
  <br>
<br>
este funcionalidad para que al anochecer cerrara toda salida o puerta para su proteccio y no se abra hasta que salga el sol para mantener segura las platas de criaturas/animales de la noche <br>
  <br>
<br>
Se ha determinado científicamente por expertos químicos y botánicos que la falta de luz afecta al crecimiento y capacidad de la planta y es indispensable que la planta en cuestion tenga buena luminocidad para su optimo crecimiento<br>
  <br>
<br>
    <table>
      <tr>
        <th>Fecha</th>  
        <th>Hora</th>
        <th>Nivel de luz</th>
      </tr>
      <tr>
        <td>07/04</td>
        <td>17:45:10</td>
        <td>55%</td>
      </tr>
      <tr>
        <td>10/04</td>
        <td>16:27:33</td>
        <td>50%</td>
      </tr>
      <tr>
        <td>13/04</td>
        <td>15:38:21</td>
        <td>48%</td>
      </tr>
      <tr>
        <td>17/04</td>
        <td>18:03:58</td>
        <td>58%</td>
      </tr>
      <tr>
        <td>23/04</td>
        <td>17:12:38</td>
        <td>52%</td>
      </tr>
    </table>   
      
      
    
  </body>  
</html>



































      
<meta charset="utf-8">
<style type="text/css">
body{
  background-color:
  