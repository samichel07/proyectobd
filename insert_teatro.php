<?php

include 'conexion_teatro.php'; 
$nombre_teatro=$_POST["nombre_teatro"];
$calle=$_POST["calle"];
$localidad =$_POST["localidad"];
$provincia=$_POST["provincia"];
$telefono=$_POST["telefono"];
$categoria=$_POST["categoria"];
$aforo=$_POST["aforo"];
$sql = $db->query("INSERT into teatro (nombre_teatro,calle_numero,localidad,provincia,telefono,categoria,aforo)
 values ('$nombre_teatro','$calle','$localidad','$provincia','$telefono','$categoria','$aforo')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_teatro.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_obra_form.php";
    </script>';
}
?>