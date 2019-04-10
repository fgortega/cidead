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
              <div align="right">
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena4/mail.php" method="post" target="_self" id="tutor1_4">
                  <table width="100%" cellpadding="6" cellspacing="4" >
                    <tr>
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"><strong>1</strong>.
                          <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Redondea en cada caso a la cifra indicada:</div>
                        <blockquote>
                          <div align="left">
                            <p><strong>a)</strong> 1,237 a d&eacute;cimas &rarr;
                              <input name="r1a" type="text" id="r1a" size="6" value="'.$_POST["r1a"].'" DISABLED>
                            </p>
                            <p><strong>b)</strong> 5,3467 a mil&eacute;simas &rarr; 
                              <input name="r1b" type="text" id="r1b" size="6" value="'.$_POST["r1b"].'" DISABLED>
                            </p>
                            <p>&nbsp; </p>
                          </div>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <p align="justify"><strong>2</strong>.
                          Ordena de menor a mayor:</p>
                        <p align="left">&nbsp;&nbsp;&nbsp;<strong>&nbsp;a)</strong>
                          230 cm;&nbsp;0,25 dam; 4 dm&nbsp;&nbsp;
                          <input name="r2a" type="text" id="r2a"  value="'.$_POST["r2a"].'" DISABLED  size="22">
                        </p>
                        <p align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;b) </strong>0,07
                          kg; 680 g; 0,72 hg&nbsp;&nbsp;&nbsp;&nbsp;
                          <input name="r2b" type="text" id="r2b"  value="'.$_POST["r2b"].'" DISABLED  size="22">
                        </p>
                        <div align="center"></div></td>
                    </tr>
                    <tr>
                      <td width="50%" rowspan="2" valign="top" class="textopeque">
                        <div align="justify" class="textopeque">
                          <p><strong>3.</strong> Realiza las operaciones indicadas:</p>
                        </div>
                        <blockquote>
                          <p><strong>a)</strong> 12,009 + 0,23 - 7,4&middot;0,25
                            =
                            <input name="r3a" type="text" id="r3a" size="6" value="'.$_POST["r3a"].'" DISABLED>
                          </p>
                          <p><strong>b)</strong> 16,2 : (0,15 + 1,05) =
                            <input name="r3b" type="text" id="r3b" size="6" value="'.$_POST["r3b"].'" DISABLED>
                          </p>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"><strong>4.</strong>
                          El coche de Juan consume 7,5 litros de gasolina cada
                          100 km. De su casa al trabajo hay 15 km y cada d&iacute;a
                          hace un trayecto de ida y otro de vuelta. El litro de
                          gasolina cuesta 1,032 &euro;, &iquest;cu&aacute;nto
                          gastar&aacute; en una semana si trabaja de lunes a viernes?
                        </div></td>
                    </tr>
                    <tr>
                      <td width="24%" height="83" valign="top" DISABLED> '.$_POST["r4a"].'</textarea></td>
                      <td width="26%" valign="top" class="textopeque"><div align="center">&nbsp;resultado:
                          <input name="r4b" type="text" id="r4b" size="6" value="'.$_POST["r4b"].'" DISABLED>
                          &euro;</div></td>
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