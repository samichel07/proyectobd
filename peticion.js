//completar segun el numero de funciones creadas
$(obtener_nombre());

//Se creará una funcion por campo
function obtener_nombre(anio_publicacion)//el nombre de la variable que se manda
{
	$.ajax({
		url : 'tabla_comparador.php',
		type : 'POST',
		dataType : 'html',
		data : { anio_publicacion: anio_publicacion },//Tiene que ser el ultimo 
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#nombre', function()//#nombre es el nombre con el que se identifica al input
{
	console.log("jijiji");
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_nombre(valorBusqueda);//Aquí se llama a la función 
	}
	else
		{
			obtener_nombre();
		}
});