<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Tarea</title>
</head>

<body>
    <?php
    include("BD.php");
    ?>
    <header>
        <h1>Eliminar Tarea</h1>
    </header>
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Codigo de tarea a eliminar </td>
                    <td>
                        <input type="text" name="txtID">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Eliminar" name="btnBorrar">
                    </td>
                </tr>
                <?php

                if (isset($_POST['btnBorrar'])) {
                    $codigo = $_POST['txtID'];

                    $rs = mysqli_query($cn, "CALL sp_BorrarTarea('$codigo')");

                    if ($rs) {
                        echo "<script>alert('Menu eliminado!!!');
                                location.href='ToDoList.php'</script>";
                    } else {
                        echo "Ocurrio un error " . mysqli_error($cn);
                    }
                }

                ?>
            </table>
        </form>
    </section>
    <footer>

    </footer>
</body>

</html>