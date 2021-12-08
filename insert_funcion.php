<?php

include 'conexion_teatro.php'; 
$id=$_POST["id"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$teatro = implode((isset($_POST['teatro']) ? $_POST['teatro']: null));
$obra=implode((isset($_POST['obra']) ? $_POST['obra']: null));
$id_afinidad=implode((isset($_POST['afinidad']) ? $_POST['afinidad']: null));
$sql = $db->query("INSERT into funcion (id_funcion,fecha,hora,teatro,obra,id_afinidad)
 values ('$id','$fecha ','$hora','$teatro','$obra','$id_afinidad')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_funcion.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_funcion_form.php";
    </script>';
}
?>