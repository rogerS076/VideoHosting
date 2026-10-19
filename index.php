<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
	
  body {
	
    background-color: #eef2ff;	
    color: #1e1b4b;
  }
  form {
    background-color: #ffffff;
    border: 2px solid #6366f1;
    color: #1e1b4b;
  }
  label {
    color: #4338ca;
    font-weight: bold;
  }
  input {
    background-color: #f5f3ff;
    color: #1e1b4b;
    border: 2px solid #a5b4fc;
  }
  input:focus {
    background-color: #ffffff;
    border-color: #f59e0b;
    outline-color: #f59e0b;
  }
  input::placeholder {
    color: #9ca3af;
  }
  button {
    background-color: #10b981;
    color: #ffffff;
    border: 2px solid #059669;
  }
  button:hover {
    background-color: #059669;
  }
  @media (prefers-color-scheme: dark) {
    body { background-color: #0f172a; color: #e0e7ff; }
    form { background-color: #1e293b; border-color: #818cf8; color: #e0e7ff; }
    label { color: #a5b4fc; }
    input { background-color: #0f172a; color: #e0e7ff; border-color: #475569; }
    input:focus { background-color: #1e293b; border-color: #fbbf24; outline-color: #fbbf24; }
    input::placeholder { color: #64748b; }
  }
</style>
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