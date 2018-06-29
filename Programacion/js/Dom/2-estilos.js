 //manera de recoger Por el id un elemento
    document.getElementById('CambiaClase').textContent='Cambia Items';
    document.getElementById('VolverItems').textContent='Volver Items';
    document.getElementById('BorrarItems').textContent='Borrar Items';
   //Manera de aclarar que los objetos (Elementos Tienen acciones) 
   //y se direccionan a una funcion
  	document.addEventListener('DOMContentLoaded', inicializacion);
     
  	function inicializacion(){
      //proceso para  hacer un Direccionamiento a funcion
  		var cambiaClaseButton = document.getElementById('CambiaClase'); 
  		  cambiaClaseButton.addEventListener('click',CambiaEstilos);

       var Volver = document.getElementById('VolverItems'); 
        Volver.addEventListener('click',VolverItems); 

        var Borrar = document.getElementById('BorrarItems'); 
        Borrar.addEventListener('click',BorrarItems); 
  	}
    
    function BorrarItems(){
      //manera de recoger elementos por el tipo de script html
      var Elementos = document.getElementsByTagName('li');
        console.log(Elementos)
       for (var i = 0;i < Elementos.length; i++) {
          Elementos.item(i).classList.add('itemBlue')
        } 
    }

    function VolverItems(){
      //manera de recoger elementos por el tipo nombre de la clase Como array
      Elementos= document.getElementsByClassName('item');
      Elementos.item(0).textContent= "Item";
      Elementos.item(1).textContent= "Item 1";
      Elementos.item(2).textContent= "Item 2";
      for (var i = 0;i < Elementos.length; i++) {
        //cambio de color a los elementos
        Elementos.item(i).style.color="Black"
      }
    }


  	function CambiaEstilos(){
       var Elementos  =  document.getElementsByClassName('item');
       //Cambio de datos al item 1
        console.log(Elementos.item(1).textContent="nuevo valor");
       for (var i = 0;i < Elementos.length; i++) {
         console.log("Estas en el item: "+ Elementos.item(i));
         Elementos.item(i).style.color='Orange'
       }
  	}