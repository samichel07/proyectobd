function agregardatos(usuario,correoo,contrasenaa){
    cadena="usuario="+ usuario + "&correoo=" + correoo+ "&contrasenaa=" + contrasenaa ;
    $.ajax({
        type:"POST",
        url:"insertar_registro.php",
        data: cadena
      
        
    });
}





