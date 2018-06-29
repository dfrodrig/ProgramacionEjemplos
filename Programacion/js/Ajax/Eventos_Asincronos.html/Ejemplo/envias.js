
function enviarDatos(evento){
 evento.preventDefault();

   var enviarAJAX={
     url:'servidor.php',
      method:'POST',
        dataType:'text',
        data: $(this).serialize(),
         beforeSend: function(){
               $('#mensaje1').fadeIn('slow')
            },
         error: function(xhr, textStatus, error){
                console.log(xhr, textStatus, error) //señala el error
                 $('#mensaje1').fadeOut('slow',function(){
                   $('#mensaje2').fadeIn('slow').html("<p>Error en el sistema: </p>"+xhr.status)
                 })
              },
          success: function(data,textStatus,xhr){    
              console.log(data,textStatus,xhr)
                $('#mensaje1').fadeOut('slow',function(){
                  $('#mensaje2').fadeIn('slow').html(data)
                    }) 
                  }
       }
  console.log($(this).serialize())
 $.ajax(enviarAJAX)
}


$('#contacto').on('submit', enviarDatos)
 $(document).on('click','#limpiar',function(){
   $('#contacto')[0].reset();
 })