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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena7/mail.php" method="post" target="_self" id="tutor1_7">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>1</strong>. 
                          <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Escribe con lenguaje algebraico:</font></div>
                        <div align="left"> 
                          <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;a)</strong> 
                            Dos n&uacute;meros enteros consecutivos &#8212;&gt; 
                            <input name="r1a" type="text" id="r1a" size="5" value="'.$_POST["r1a"].'" DISABLED>
                            <strong><br>
                            </strong> <strong>&nbsp;&nbsp;&nbsp;b)</strong> La 
                            mitad de un n&uacute;mero m&aacute;s su doble &#8212;&gt; 
                            <input name="r1b" type="text" id="r1b" size="5" value="'.$_POST["r1b"].'" DISABLED>
                            <br>
                            <strong>&nbsp;&nbsp;&nbsp;c)</strong> El per&iacute;metro 
                            de un cuadrado de lado x &#8212;&gt; 
                            <input name="r1c" type="text" id="r1c" size="5" value="'.$_POST["r1c"].'" DISABLED>
                            <br>
                            <strong>&nbsp;&nbsp;&nbsp;d) </strong>La edad de Mar&iacute;a 
                            dentro de tres a&ntilde;os &#8212;&gt; 
                            <input name="r1d" type="text" id="r1d" size="5" value="'.$_POST["r1d"].'" DISABLED>
                            </font></p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify" class="textopeque"> 
                          <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>2.</strong> 
                            Escribe con lenguaje habitual las expresiones siguientes:</font></p>
                        </div>
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;a)</strong> 
                          2x - 2 &#8212;&gt;&nbsp; 
                          <input name="r2a" type="text" id="r2a" size="36" value="'.$_POST["r2a"].'" DISABLED>
                          <strong><br>
                          </strong> <strong>&nbsp;&nbsp;&nbsp;b)</strong> x<span class="superpeque&ntilde;o">3</span>+3x 
                          &#8212;&gt; 
                          <input name="r2b" type="text" id="r2b" size="36" value="'.$_POST["r2b"].'" DISABLED>
                          <br>
                          <strong>&nbsp;&nbsp;&nbsp;c)</strong> 5(x-1) &#8212;&gt; 
                          <input name="r2c" type="text" id="r2c" size="36" value="'.$_POST["r2c"].'" DISABLED>
                          <br>
                          <strong>&nbsp;&nbsp;&nbsp;d) </strong>3x/2 &#8212;&gt;&nbsp;&nbsp; 
                          <input name="r2d" type="text" id="r2d" size="36" value="'.$_POST["r2d"].'" DISABLED>
                          </font></p>
                        <div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="50%" rowspan="2" valign="top" class="textopeque"> 
                        <div align="justify" class="textopeque"> 
                          <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>3.</strong> 
                            Resuelve las ecuaciones:</font></p>
                          <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;a)</strong> 
                            3x + 5 = x + 11 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x= 
                            <input name="r3a" type="text" id="r3a" size="6" value="'.$_POST["r3a"].'" DISABLED>
                            </font></p>
                          <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;b)</strong> 
                            2(x - 3) = 3x + 9 - 4x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x= 
                            <input name="r3b" type="text" id="r3b" size="6" value="'.$_POST["r3b"].'" DISABLED>
                            </font></p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>4.</strong> 
                          En un garaje hay 56 veh&iacute;culos entre coches y 
                          motos; si en total contamos 180 ruedas, &iquest;cu&aacute;ntos 
                          coches y cu&aacute;ntas motos hay?</font></div></td>
                    </tr>
                    <tr> 
                      <td width="24%" valign="top"><font face="Verdana, Arial, Helvetica, sans-serif"> 
                        <textarea name="r4a" rows="3" id="r4a" DISABLED> '.$_POST["r4a"].'</textarea>
                        </font></td>
                      <td width="26%" valign="top" class="textopeque"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"> 
                          <input name="r4b" type="text" id="r4b" size="6" value="'.$_POST["r4b"].'" DISABLED>
                          coches<br>
                          <input name="r4c" type="text" id="r4c" size="6" value="'.$_POST["r4c"].'" DISABLED>
                          motos</font></div></td>
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