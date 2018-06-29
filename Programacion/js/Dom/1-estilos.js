 /*Manera de ingresar por DOM se llama 
 por el nombre y se le da funcionalidad a los
 campos o manejo de ellos*/
 console.log(document.forms.formulario.action)
    document.forms.formulario.campo.value="Ejemplo por el document";
    //etiquetas ById
       document.getElementById('campo1').value='Ejemplo de get Element';
          document.getElementById('parrafo').textContent='metodo para llamar y cambiar un campo ';
            document.getElementById('Label').addEventListener('click', cambiarFoco);
              function cambiarFoco(){
             	document.forms.formulario.campo.focus();
              }

