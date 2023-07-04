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
        $Distancia = $_POST["Distancia"];

        // Validar los datos (puedes agregar tus propias validaciones aquí)

        // Procesar los datos
        // En este ejemplo, simplemente mostramos los datos recibidos
        echo "<h2>Información recibida:</h2>";
        echo "Fecha: " . $Fecha . "<br>";
        echo "Hora: " . $Hora . "<br>";
        echo "Distancia: " . $Distancia . "<br>";
    }
    ?>
    
    <h2>Formulario de contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Fecha">Fecha:</label>
        <input type="text" name="Fecha" required><br><br>

        <label for="Hora">Hora:</label>
        <input type="Hora" name="email" required><br><br>

        <label for="Distancia">Distancia:</label>
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
        <th><a href="luminosidad.php">Ver mediciones<br>de luminosidad</a></th>
        <th><a href="index.php">Volver al inicio</a></th>
      </tr>
    </table>
    </center>

<div id="Niveles de humedad">
<p><b>Movimiento/Acercamientos </b></p>
      
<p>Proteccion de movimiento<br>
<br>
La intencion de esta informacion es para dar a conocer el movimiento o acontecimientos cercanos al area agricola donde se instale nuestro servicio de proteccion<br>
  <br>
<br>
Esta te dara constante infomacion sobre lo antes ya mecionado que seria la humedad luminosidad y tambien De movimiento <br>
  <br>
<br>
Este ultimo ara que al detectar un objeto u animal cercano activara una puerta que cierre el lugar par cualquier animal cercano no logre llegar a las plantas dandole seguridad de que no pase nada a su zona agricola<br>
  <br>
Actualisacion constante<br>
<br>
Al tener el servicio tendra constante informacion sobre la zona que lo use como seria cuanta luz le llega la humedad del zulo y si tene que regarla y si tiene algun animal cerca que gracias al sistema no tendra que preocuparse por eso <br>
  <br>
Datos<br>
<br>
Los datos enviados seran recividos por el programa y organisados en  una tabla para que tenga un informe sobre lo sucedido en su ausencia </p>
    <div id="Eventos">
    <p><b>Eventos</b>
    <br>
    Hasta la fecha se han detectado XYZ eventos.<br>
    Se han detectados X eventos de activación de riesgos de sequedad del suelo.<br>
    Se han detectados Y eventos de activación de toldo protector  por proximidad por aves.<br>
    Se han detectados Z eventos de activación de toldo protector por bajos niveles de luz (noche).
      <p>
   <table>
      <tr>
        <th>Fecha</th>  
        <th>Hora</th>
        <th>Distancia</th>
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



