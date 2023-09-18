<?php

$usuario = $_POST["user"];
$contraseña = $_POST["password"];

session_start();
$_SESSION["user"] = $usuario;

include("BD.php");

$consulta = "SELECT*FROM TALUMNO where CODALUMNO='$usuario' and NOMALUMNO='$contraseña'";
$resultado = mysqli_query($cn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

    header("location:ToDoList.php");
} else {
?>
    <?php
    include("Index.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($cn);
