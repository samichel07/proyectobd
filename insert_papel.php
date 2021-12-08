<?php

include 'conexion_teatro.php'; 
$nombre_papel=$_POST["nombre_papel"];
$obra = implode((isset($_POST['obra']) ? $_POST['obra']: null));
$duracion=$_POST["duracion"];
$atrezo=$_POST["atrezo"];
$sql = $db->query("INSERT into papel (nombre_papel,obra,duracion ,atrezo)
 values ('$nombre_papel','$obra ','$duracion','$atrezo')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_papel.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_papel_obra.php";
    </script>';
}
?>