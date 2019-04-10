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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena2/mail.php" method="post" target="_self" id="tutor1_2">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"><strong>1</strong>. 
						<input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						<input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Escribe todos los m&uacute;ltiplos de 6 comprendidos 
                          entre 50 y 100.</div>
                        <div align="left"> 
                          <p align="center"> 
                            <input name="r1a" type="text" id="r1a"  value="'.$_POST["r1a"].'" DISABLED  size="40">
                          </p>
                          <p align="center">&nbsp; </p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <p align="justify"><strong>2</strong>. 
                          Escribe todos los divisores de 48. </p>
                        <p align="center"> <br>
                          <input name="r2a" type="text" id="r2a"  value="'.$_POST["r2a"].'" DISABLED  size="40">
                          <br>
                          &nbsp;&nbsp;&nbsp;&nbsp; </p>
                        <div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="50%" rowspan="2" valign="top"> <div align="justify" class="textopeque"> 
                          <p><strong>2.</strong> Descomp&oacute;n en factores 
                            primos los n&uacute;meros 96 y 120, luego calcula 
                            el m.c.m y el m.c.d. </p>
                          <p align="center"> <strong>&nbsp;&nbsp;&nbsp;&nbsp;a)</strong> 
                            m.c.m. (96,120) <span class="superpeque&ntilde;o"></span>= 
                            &nbsp; 
                            <input name="r3a" type="text" id="r3a" size="20" value="'.$_POST["r3a"].'" DISABLED>
                            <br>
                            <strong>&nbsp;&nbsp;&nbsp;&nbsp;b)</strong> m.c.d.&nbsp; 
                            (96,120) = &nbsp; 
                            <input name="r3b" type="text" id="r3b" size="20" value="'.$_POST["r3b"].'" DISABLED>
                          </p>
                          <p align="center">&nbsp;</p>
                          </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"><strong>4.</strong> 
                          Tres autobuses de tres lineas distintas salen de una 
                          estaci&oacute;n: el primero cada 10 minutos, el segundo 
                          cada 12 minutos y el tercero cada 15 minutos. Si a las 
                          7 de la ma&ntilde;ana salieron los tres, &iquest;a qu&eacute; 
                          hora volver&aacute;n a salir a la vez?.</div></td>
                    </tr>
                    <tr> 
                      <td width="24%" valign="top"><p> 
                          <textarea name="r4a" rows="5" id="r4a" DISABLED> '.$_POST["r4a"].'</textarea>
                        </p>
                        </td>
                      <td width="26%" valign="top" class="textopeque"><div align="center">&nbsp;a 
                          las 
                          <input name="r4b" type="text" id="r4b" size="10" value="'.$_POST["r4b"].'" DISABLED>
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