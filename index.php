<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<form action="enviar.php" method="get">
<!-- nombre
edad
carrera
numero de cuenta -->
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" required placeholder="Juan Perez" maxlength="150">
<br>
<label for="edad">Edad:</label>
<input type="number" name="edad" maxlength="2" required placeholder="54">
<br>
<label for="carrera">Carrera:</label>
<input type="text" name="carrera" maxlength="150" required placeholder="Computacion">
<br>
<label for="numeroCueta">Numero de cuenta:</label>
<input type="text" maxlength="9" required name="numeroCuenta" placeholder="123456789">
<br>
<button type="submit">Enviar</button>
</form>

</body>

</html>