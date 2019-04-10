<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>

<?
	function elimina_acentos($cadena){
					 $tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
					 $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
					 return(strtr($cadena,$tofind,$replac));
	}


  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
  require "includes/class.phpmailer.php";

  //instanciamos un objeto de la clase phpmailer al que llamamos
  //por ejemplo mail
  $mail = new phpmailer();

  //Definimos las propiedades y llamamos a los métodos
  //correspondientes del objeto mail

  //Con PluginDir le indicamos a la clase phpmailer donde se
  //encuentra la clase smtp que como he comentado al principio de
  //este ejemplo va a estar en el subdirectorio includes
  $mail->PluginDir = "includes/";

  //Con la propiedad Mailer le indicamos que vamos a usar un
  //servidor smtp
  //$mail->Mailer = "smtp";

  //Asignamos a Host el nombre de nuestro servidor smtp
  //$mail->Host = "correo-saliente.pntic.mec.es";
  //$mail->Host = "correo-saliente.pntic.mec.es";

  //Le indicamos que el servidor smtp requiere autenticación
  $mail->SMTPAuth = true;

  //Le decimos cual es nuestro nombre de usuario y password
  $mail->Username = "cgee0007";
  $mail->Password = "experi26";

	$mail->ContentType = "text/html";
	$mail->CharSet = "iso-8859-1";

  //Indicamos cual es nuestra dirección de correo y el nombre que
  //queremos que vea el usuario que lee nuestro correo
  $mail->From = "edad.isftic@roble.pntic.mec.es";
  $mail->FromName = "Edad INTEF - 1º Matemáticas";

  //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar
  //una cuenta gratuita, por tanto lo pongo a 30
  $mail->Timeout=30;

  //Indicamos cual es la dirección de destino del correo
	//echo $_POST["email"];
	$mail->AddAddress($_POST["email"]);

  //Asignamos asunto y cuerpo del mensaje
  //El cuerpo del mensaje lo ponemos en formato html, haciendo
  //que se vea en negrita
	$subject = $_POST['alumno']." - ".$_POST['quincena'];
	$subject = elimina_acentos($subject);

  $mail->Subject = $subject;

	$actividad = $_POST["act"].".php";
	$actividad = elimina_acentos($actividad);
	$actividad = strtolower($actividad);
	$actividad = str_replace(" ", "_", $actividad);

	include("mail/".$actividad);


  //se envia el mensaje, si no ha habido problemas
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues
  //del anterior, para ello se usa la funcion sleep
  $intentos=1;
  while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	$exito = $mail->Send();
     	$intentos=$intentos+1;

   }


?>

<script language="JavaScript" type="text/javascript">
alert("Respuestas enviadas correctamente");
history.back();
</script>


</body>
</html>
