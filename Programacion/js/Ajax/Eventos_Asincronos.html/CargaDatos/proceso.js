function event_Datos(){
	var nombre=document.getElementById('btn1').value;
	var apellido=document.getElementById('btn2').value;
	var edad=document.getElementById('btn3').value;
	$.ajax({
		url: 'Datos.php',
		method: 'POST',
		data:{'nombre':nombre,'apellido':apellido,'edad':edad},
		beforeSend: function(){
          $('#ima').fadeIn('slow');
		},
		success: function(data){
          $('#ima').fadeOut('slow');
          console.log(data);
          $('#bumm').fadeIn('slow').html(data)
		}

	})
}


 
 function limpiar(){
 	
   var n1=document.getElementById('btn1').value;
    var n2=document.getElementById('btn2').value;
     var n3=document.getElementById('btn3').value;
      var array_1=[n1,n2,n3];
       document.write('Recorrer un arreglo: '+array_1.sort());
 }