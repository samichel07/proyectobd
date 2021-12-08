<?php

include 'conexion_teatro.php'; 
$nombre_artistico=$_POST["nombre_artistico"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$edad=$_POST["edad"];
$cache=$_POST["cache"];
$descripcion=$_POST["descripcion"];
$papel_afin=$_POST["papel"];
$cantidad=$_POST["cantidad"];
$sql = $db->query("INSERT into artista (nombre_artistico,nombre,apellidos,edad,cache,descripcion,papel_afin,cantidad_interpretaciones)
 values ('$nombre_artistico','$nombre','$apellidos','$edad','$cache','$descripcion','$papel_afin','$cantidad')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_artista.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_artistas_form.php";
    </script>';
}
?>