<?
$mail->Body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Actividades</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/paracidead1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="Layer1" style="position:absolute; left:0px; top:0px; width:800px; height:540px; z-index:1">
  <table width="800" height="85%" border="0" align="center" cellspacing="0">
    <tr> 
        <table width="100%" cellspacing="8">
			<tr>            <td colspan="3" valign="top" bgcolor="#eeeedd"> 
              <div align="right"> </div>
              <div align="left"></div>
              <div align="justify"> 
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena5/mail.php" method="post" target="_self" id="tutor1_5">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"><div align="justify"> 
                          <strong>1</strong>. 
                          <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
                          Compro una garrafa de 12 litros de vino. Con ella lleno 
                          botellas de 3/4 de litro. <br>
                          &iquest;Cu&aacute;ntas botellas podr&eacute; llenar?</div>
                        <div align="left"> 
                          <p align="center"> 
                            <input name="r1a" type="text" id="r1a"  value="'.$_POST["r1a"].'" DISABLED  size="40">
                          </p>
                          <p align="center">&nbsp; </p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <p align="justify"><strong>2</strong>. 
                          Un hortelano siembra de tomates 1/4 de la huerta. De 
                          lo que queda dedica la mitad para lechugas y el resto 
                          para pimientos. &iquest;Qu&eacute; fracci&oacute;n de 
                          huerta dedica a los pimientos?</p>
                        <p align="center"> 
                          <input name="r2a" type="text" id="r2a" size="40"  value="'.$_POST["r2a"].'" DISABLED >
                        </p>
                        <p align="center">&nbsp; </p>
                        </td>
                    </tr>
                    <tr> 
                      <td width="50%" valign="top"> <div align="justify" class="textopeque"> 
                          <p><strong>3.</strong> Tengo tres d&eacute;cimos de 
                            una serie para el sorteo de Loter&iacute;a Nacional. 
                            El primer premio es 600 euros por cada serie de ese 
                            n&uacute;mero. Si resultase premiado, &iquest;cu&aacute;nto 
                            dinero me corresponder&iacute;a por mis tres d&eacute;cimos?</p>
                          <p align="center"> 
                            <input name="r3a" type="text" id="r3a"  value="'.$_POST["r3a"].'" DISABLED  size="40">
                          </p>
                          <p align="center">&nbsp; </p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"> 
                          <p><strong>4.</strong> Realiza las siguientes operaciones, 
                            no olvides simplificar el resultado si es posible:</p>
                        </div>
                        <blockquote> 
                          <div align="justify">a) <img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena5/imagenes5/tutor2.GIF" width="92" height="32" align="absmiddle"> 
                            <input name="r4a" type="text" id="r4a"  value="'.$_POST["r4a"].'" DISABLED  size="9">
                          </div>
                          <div align="justify">b) <img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena5/imagenes5/tutor3.GIF" width="113" height="36" align="absmiddle"> 
                            <input name="r4b" type="text" id="t4b" size="9" value="'.$_POST["r4b"].'" DISABLED>
                          </div>
                        </blockquote></tr>
                    <tr> 
                      <td colspan="3" bgcolor="#CCCC99" class="textopeque"> <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"> 
                          <input name="alumno" type="text" id="alumno"  value="'.$_POST["alumno"].'" DISABLED  size="30">
</td>
                    </tr>
                  </table>
                </form>
              </div>
              <div align="left"></div>
              
            </td>
          </tr>
        </table>'?>