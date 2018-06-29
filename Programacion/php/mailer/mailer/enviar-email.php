<?php
//recibe todos los campos del formulario
$de=$_POST['de_txt'];
 $para=$_POST['para_txt'];
  $asunto=$_POST['asunto_txt'];
   $mensaje=$_POST['mensaje_txt'];
//Se necesita para que no aparescan mensajes extraños al enviar el correo
//r es salto de linea
$cabeceras="MIME-Version: 1.0\r\n";
//Concatena le esta diciento que el tipo de texto sea = html
//y el charset reconosca todo tipo de caracter
  $cabeceras.="Content-type:  text/html; charset=iso-8859-1\r\n";
//El envio del email
  $cabeceras="Form: $de \r\n";

   $archivo=$_FILES['archivo_fls']['tmp_name'];
   $destino=$_FILES['archivo_fls']['name'];

if(move_uploaded_file($archivo,$destino)){
  include_once("class.phpmailer.php");
  include_once("class.pop3.php");

  $mail=new PHPMailer();//crea un objeto de phpMailer
  $mail->IsSMTP();//protocolo SMTP
  $mail->SMTPAuth=true;//autentificacion de SMTP
  $mail->SMTPSecure="ssl";
  $mail->Host="smtp.gmail.com";//servidor smtp de gmail
  $mail->Port=465;//puerto de seguridad
  $mail->From=$de;//remitente del correo
  $mail->AddAddress($para);//destinatario
  $mail->Username="dfrodriguez2066@misena.edu.co";
  $mail->Password="98121506602  canela";
  $mail->Subject=$asunto;
  $mail->Body=$mensaje;
  $mail->WordWrap=50;
  $mail->MsgHTML($mensaje);
  $mail->AddAttachment($destino);
  if($mail->Send()){//enviamos el correo
    $respuesta= ":)";
  }else{
    $respuesta= ":(";
    $respuesta.=" Error ".$mail->ErrorInfo;
  }
}else {
 $respuesta="No se enviaron los datos";
 
}
//toca modificar el SMPT para enviar un email
header("Location:formulario.php?respuesta=$respuesta");
 ?>
