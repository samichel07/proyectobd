<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $nombre_papel = $_POST["nombre_papel"];
    $obra = $_POST["obra"];
    $duracion = $_POST["duracion"];
    $atrezo = $_POST["atrezo"];
    //creamos la sentencia y la ejecutamos
    $consulta = "update papel set obra = '$obra', duracion = '$duracion', atrezo = '$atrezo' WHERE titulo_obra = '$nombre_papel'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>