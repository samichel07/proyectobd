<?php
include "conexion_login.php";
$correo = $_POST["email"];
$contrasena = $_POST["pass"];
$query ="SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contrasena';";
$result1 = mysqli_query($db,$query);
$result2 = mysqli_query($db,$query);

if($result1){
    if ($row1 = mysqli_fetch_array($result1)) {
      /*  Se definen los datos del usuario como valores globales de sesion*/
      session_start();
      $_SESSION['id'] = $row1['id_user'];
      $_SESSION['name'] = $row1['nombre']; 
      $_SESSION['address'] = $row1['correo']; 
 if ($row2 = mysqli_fetch_row($result2)>0) {
    $_SESSION['correo']= $correo;


    echo'<script type="text/javascript">
    alert("Bienvenido");
    window.location.href="administrador.php";
    </script>';
} 
}else{
    echo'<script type="text/javascript">
    alert("Usuario o Contraseña Incorrectos");
    window.location.href="login.html"
    </script>'; 
}}
?>



