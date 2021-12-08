<?php

include 'conexion_teatro.php'; 
$nombre_artistico=$_POST["nombre_artistico"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$edad=$_POST["edad"];
$precio_libreto=$_POST["precio_libreto"];
$precio_representacion=$_POST["precio_representacion"];
$sql = $db->query("INSERT into autor (nombre_artistico,nombre,apellidos,edad,precio_libreto,precio_representacion)
 values ('$nombre_artistico','$nombre','$apellidos','$edad','$precio_libreto','$precio_representacion')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_autor.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_autor_form.php";
    </script>';
}
?>