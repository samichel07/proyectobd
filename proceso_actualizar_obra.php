<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $titulo_obra = $_POST["titulo_obra"];
    $autor = $_POST["autor"];
    $anio_publicacion = $_POST["anio_publicacion"];
    $representaciones = $_POST["representaciones"];
    //creamos la sentencia y la ejecutamos
    $consulta = "update obra set autor = '$autor', anio_publicacion = '$anio_publicacion', representaciones = $representaciones WHERE titulo_obra = '$titulo_obra'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>