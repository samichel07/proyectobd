<?php

include 'conexion_teatro.php'; 
$titulo_obra=$_POST["titulo_obra"];
$autor = implode((isset($_POST['autor']) ? $_POST['autor']: null));
$anio_publicacion=$_POST["anio_publicacion"];
$representaciones=$_POST["representaciones"];
$sql = $db->query("INSERT into obra (titulo_obra,autor ,anio_publicacion,representaciones)
 values ('$titulo_obra','$autor ','$anio_publicacion','$representaciones')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_obra.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_obra_form.html";
    </script>';
}
?>