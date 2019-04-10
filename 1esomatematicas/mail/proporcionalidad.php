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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena6/mail.php" method="post" target="_self" id="tutor1_6">
                <table width="100%" cellpadding="6" cellspacing="6" >
                  <tr> 
                    <td width="50%" valign="top" class="textopeque"> <div align="justify"> 
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>1</strong>. 
                          <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Selecciona las razones que forman proporci&oacute;n:</font></p>
                        <p> <font face="Verdana, Arial, Helvetica, sans-serif"> 
                          &nbsp;&nbsp;&nbsp;&nbsp; 
                          <input name="r1a" type="checkbox" id="r1a" value="checkbox" DISABLED';
if($_POST["r1a"] ==  "checkbox"){
	$mail->Body = $mail->Body.' CHECKED >';
}else{
	$mail->Body = $mail->Body.' >';
}
						
$mail->Body = $mail->Body.'                          3/4 y 12/15 </font></p>
                        <p> <font face="Verdana, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; 
                          <input name="r1b" type="checkbox" id="r1b" value="checkbox" DISABLED';
if($_POST["r1b"] ==  "checkbox"){
	$mail->Body = $mail->Body.' CHECKED >';
}else{
	$mail->Body = $mail->Body.' >';
}
						
$mail->Body = $mail->Body.'                          15/20 y 3/4</font></p>
                        <p> <font face="Verdana, Arial, Helvetica, sans-serif"> 
                          &nbsp;&nbsp;&nbsp;&nbsp; 
                          <input name="r1c" type="checkbox" id="r1c" value="checkbox" DISABLED';
if($_POST["r1c"] ==  "checkbox"){
	$mail->Body = $mail->Body.' CHECKED >';
}else{
	$mail->Body = $mail->Body.' >';
}
						
$mail->Body = $mail->Body.'                          12/15 y 4/5</font></p>
                      </div></td>
                    <td colspan="2" valign="top" class="textopeque"> <p align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>2</strong>. 
                        Una tarta de 6 raciones necesita 3 huevos y 150 gr de 
                        az&uacute;car, &iquest;qu&eacute; cantidad de estos ingredientes 
                        necesita una tarta de 8 raciones?</font></p>
                      <p align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;a)</strong> 
                        huevos: &nbsp; 
                        <input name="r2a" type="text" id="r2a" size="12" value="'.$_POST["r2a"].'" DISABLED>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<strong>b)</strong> az&uacute;car:&nbsp;&nbsp;&nbsp; 
                        <input name="r2b" type="text" id="r2b" size="12" value="'.$_POST["r2b"].'" DISABLED>
                        gr </font></p>
                      <div align="center"></div></td>
                  </tr>
                  <tr> 
                    <td width="50%" valign="top"> <div align="justify" class="textopeque"> 
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>3.</strong> 
                          Determina el valor de x e y para que estas dos series 
                          de n&uacute;meros sean directamente proporcionales: 
                          </font></p>
                        <table width="70%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#999966" class="textopeque">
                          <tr> 
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">x</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">0,75</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">6</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">3</font></div></td>
                          </tr>
                          <tr> 
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">2</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">y</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">8</font></div></td>
                            <td width="25%"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif">4</font></div></td>
                          </tr>
                        </table>
                        <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">x= 
                          <input name="r3a" type="text" id="r3a" size="6" value="'.$_POST["r3a"].'" DISABLED>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y= 
                          <input name="r3b" type="text" id="r3b" size="6" value="'.$_POST["r3b"].'" DISABLED>
                          </font></p>
                      </div></td>
                    <td colspan="2" valign="top"><div align="justify" class="textopeque"> 
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>4.</strong> 
                          En cierta &eacute;poca del a&ntilde;o los embalses de 
                          una regi&oacute;n se encuentran al 45% de su capacidad, 
                          lo que representa 3600 hect&oacute;metros c&uacute;bicos. 
                          &nbsp;&iquest;Cu&aacute;l es la capacidad total de los 
                          embalses?</font></p>
                        <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">&nbsp; 
                          <input name="r4a" type="text" id="r4a" size="12" value="'.$_POST["r4a"].'" DISABLED>
                          hm<span class="superpeque&ntilde;o">3</span> </font></p>
                      </div></td>
                  </tr>
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