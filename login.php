<html>
<head>
  <title>Registro de usuario</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "login1") or
    die("Problemas con la conexión");

  $nombre = $_REQUEST['nombre'];
  $clave = $_REQUEST['clave'];
  $email = $_REQUEST['email'];

  $query = "INSERT INTO usuarios(nombre, clave, email) VALUES ('$nombre', '$clave', '$email')";

  mysqli_query($conexion, $query) or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Usuario creado correctamente.";
  ?>
</body>
<a href="index.html"> <button type="button">Listo!</button></a>
</html>
