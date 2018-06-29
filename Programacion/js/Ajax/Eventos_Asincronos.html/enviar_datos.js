
function enviarDatos(evento){
	evento.preventDefault() //funcion que sirve para 
	//que el sistema se mantenga y se muestre en console

  var opcionesAJAX={ //variable que hace la funcion para AJAX
    url:'servidor.php', //envio de datos
      method:'POST',//GET modo de enviar
        dataType:'text', //json,script,text,html,xml
          data:$(this).serialize(), //recoge los datos del form 
            beforeSend: function(){
               $('#recarga').fadeIn('slow')
            },
              error: function(xhr, textStatus, error){
              	console.log(xhr, textStatus, error) //señala el error
                 $('#recarga').fadeOut('slow',function(){
                 	 $('#error').fadeIn('slow').html("<p>Error en el sistema: </p>"+xhr.status)
                 })

              },
                success: function(data,textStatus,xhr){    
              console.log(data,textStatus,xhr)
                $('#recarga').fadeOut('slow',function(){
                  $('#error').fadeIn('slow').html(data)
                    }) 
                  }
                }
    console.log($(this).serialize())//muestra en la consola
   $.ajax(opcionesAJAX)//ejecucion AJAX con variable
}
$('#contacto').on('submit',enviarDatos);// accion que se ejecuta
//al precionar el submite y se recoge el id del form
$(document).on('click','#limpiar', function(){
  $('#contacto')[0].reset();
})