<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Envio de correo con la funcion main php</title>
  </head>

  <script type="text/javascript">
  //esta funcione evalua que todos los capos esten llenos
    function validarForm (){
      var verificar = true;
      //valida la parte para ingresar el email(Envio de correo(Letras))
      var expRegEmail =/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
      //verifica que todos los campos cumplan con las condiciones
      if (!document.mail_frm.de_txt.value) {
        alert("El campo de es requerido");
         document.mail_frm.de_txt.focus();
          verificar=false;
        //exec evalua una expresion regular
          //evaluaa que los campos sean iguales a un email
      }else if (!expRegEmail.exec(document.mail_frm.de_txt.value)){
          alert("El campo de no es valido");
           document.mail_frm.de_txt.focus();
            verificar=false;
      }
       else if (!expRegEmail.exec(document.mail_frm.para_txt.value)){
          alert("El campo de no es valido");
           document.mail_frm.para_txt.focus();
            verificar=false;
      }else if (!expRegEmail.exec(document.mail_frm.para_txt.value)){
          alert("El campo de no es valido");
           document.mail_frm.para_txt.focus();
            verificar=false;
      }else if (!document.mail_frm.asunto_txt.value) {
        alert("El campo de es requerido");
         document.mail_frm.asunto_txt.focus();
          verificar=false;
      }else if (!document.mail_frm.mensaje_txt.value) {
        alert("El campo de es requerido");
         document.mail_frm.mensaje_txt.focus();
          verificar=false;
      }
      //verifica que el boton submit compruebe que sea verdadero
      if (verificar) {
       document.mail_frm.submit();
      }
    }
    //enlasa la function de js atraves el formulario y el boton enviar
    window.onload=function(){
     document.mail_frm.enviar_txt.onclick=validarForm;
    }
  </script>

  <body>

 <form class="" name="mail_frm" action="enviar-email.php"
 method="post" enctype="multipart/form-data">
de: <input type="text" name="de_txt" value=""><br>
para: <input type="text" name="para_txt" value=""><br>
asunto: <input type="text" name="asunto_txt" value=""><br>
mensaje: <textarea name="mensaje_txt" rows="8" cols="80"></textarea>
imagen: <input type="file" name="archivo_fls" value="">
<input type="button" name="enviar_txt" value="Enviar">
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
if(isset($_GET["respuesta"])){
   echo "<span>".$_GET['respuesta']."</span>";
}
 ?>
 </form>
  </body>
</html>
