<?php
 
include("BD.php");

$usuario = $_POST['user'];
$password = $_POST['password'];

$consulta = "SELECT * FROM USUARIO WHERE USERNAME = '$usuario' AND CONTRASEÑA = '$password' ";
$rs = mysqli_query($cn , $consulta);

$filas = mysqli_num_rows($rs);

if ($filas) {
    header("location:ToDoList.php");
}else{
    include("Index.php");
    ?>
    <h1>ERORR DE AUNTENTIFICACION</h1>
    <?php
}
mysqli_free_result($rs);
mysqli_close($cn);
