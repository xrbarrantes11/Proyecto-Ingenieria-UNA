<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Gira</title>
</head>
<body>
    <center>
        <header>
            <h1>Actualizar Informacion de la Gira</h1>
        </header>
         </br></br>
        <form th:action="@{/actualizar}" method="post">
            Nombre del lugar: <input type="text" name="nombre" required /></br><br>
            Numero de Telefono: <input type="number" name="numero" required /> </br><br>
            Hora de Llegada: <input type="datetime-local" name="horaLlegada" required /> </br><br>
            Hora de Salida: <input type="datetime-local" name="horaFin" required /></br><br>
            <select name="dato" id="dato">
                <option value="Dato1">CHOFER1</option>
                <option value="Dato2">CHOFER2</option>
            </select>
            </br></br>
            <textarea name="observacion" id="observacion" cols="30" rows="10" placeholder="observacion"></textarea>
            </br></br></br></br>
            <input type="submit" value="Actualizar" />
            <div id="contenedor"></div>
        </form>
</center>
</body>
</html>
     ?>