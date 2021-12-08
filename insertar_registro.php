<?php

include 'conexion_login.php'; 
$usuario=$_POST["usuario"];
$correoo=$_POST["correoo"];
$contrasenaa=$_POST["contrasenaa"];
$sql = $db->query("INSERT into usuario (nombre,correo,contrasena) values ('$usuario','$correoo','$contrasenaa')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="login.html";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="index.html";
    </script>';
}
?>