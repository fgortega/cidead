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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena11/mail.php" method="post" target="_self" id="tutor1_11">
                <table width="100%" cellpadding="4" cellspacing="2" >
                  <tr> 
                    <td colspan="2" valign="top" class="textopeque"> <div align="justify"> 
                        <strong>1</strong>. 
                        <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
                        <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
                        Escribe las coordenadas de los puntos de la figura y las 
                        de un cuarto, D, de forma que el pol&iacute;gono ABCD 
                        sea un rombo.</div></td>
                    <td colspan="2" valign="top" class="textopeque"> <div align="justify"><strong>3</strong>. 
                        El gr&aacute;fico representa las precipitaciones en determinada 
                        zona a lo largo de un a&ntilde;o. Si 1 corresponde a enero, 
                        2 a febrero, etc</div></td>
                  </tr>
                  <tr> 
                    <td valign="top" class="textopeque"><img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena11/imagenes11/tutor1.png" width="130" height="100"></td>
                    <td valign="top" class="textopeque"> A= 
                      <input name="r1a" type="text" id="r1a" size="9" value="'.$_POST["r1a"].'" DISABLED> <br value="'.$_POST["r1a"].'" DISABLED>
                      B= 
                      <input name="r1b" type="text" id="r1b" size="9" value="'.$_POST["r1b"].'" DISABLED> <br value="'.$_POST["r1b"].'" DISABLED>
                      C= 
                      <input name="r1c" type="text" id="r1c" size="9" value="'.$_POST["r1c"].'" DISABLED> <br value="'.$_POST["r1c"].'" DISABLED>
                      D= 
                      <input name="r1d" type="text" id="r1d" size="9" value="'.$_POST["r1d"].'" DISABLED> </td value="'.$_POST["r1d"].'" DISABLED>
                    <td colspan="2" rowspan="2" valign="top" class="textopeque"><div align="center"><img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena11/imagenes11/tutor3.png" width="245" height="140"></div></td>
                  </tr>
                  <tr> 
                    <td colspan="2" valign="bottom"> <div align="justify" class="textopeque"> 
                        <p><strong>2.</strong> Completa la tabla de proporcionalidad 
                          directa siguiente:</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="19%" valign="top"><img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena11/imagenes11/tutor2.png" width="123" height="110"></td>
                    <td width="30%" valign="top" class="textopeque"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#999966" class="textopeque">
                        <tr> 
                          <td width="25%"><div align="center"> 
                              <input name="r2a" type="text" id="r2a"  value="'.$_POST["r2a"].'" DISABLED  size="2">
                            </div></td>
                          <td width="25%"><div align="center">1</div></td>
                          <td width="25%"><div align="center">2</div></td>
                          <td width="25%"><div align="center">3</div></td>
                        </tr>
                        <tr> 
                          <td width="25%" height="19"> <div align="center">0</div></td>
                          <td width="25%"><div align="center"> 
                              <input name="r2b" type="text" id="r2b"  value="'.$_POST["r2b"].'" DISABLED  size="2">
                            </div></td>
                          <td width="25%"><div align="center">3</div></td>
                          <td width="25%"><div align="center">4,5</div></td>
                        </tr>
                      </table>
                      <p>La gr&aacute;fica que corresponde es la recta de color 
                        <input name="r2c" type="text" id="r2c" size="9" value="'.$_POST["r2c"].'" DISABLED>
                      </p></td>
                    <td colspan="2" valign="top" class="textopeque"><blockquote> 
                        <strong>a)</strong> &iquest;Qu&eacute; mes fue m&aacute;s 
                        lluvioso?:&nbsp; 
                        <input name="r3a" type="text" id="r3a" size="9" value="'.$_POST["r3a"].'" DISABLED>
                        <br>
                        <strong>b)</strong> &iquest;Cu&aacute;l fue el mes m&aacute;s 
                        seco?:&nbsp; 
                        <input name="r3b" type="text" id="r3b" size="9" value="'.$_POST["r3b"].'" DISABLED>
                        <div align="left"></div>
                        <div align="left"><strong>c) </strong>&iquest;Cu&aacute;nto 
                          llovi&oacute; en agosto?: &nbsp;&nbsp;&nbsp; 
                          <input name="r3c" type="text" id="r3c" size="6" value="'.$_POST["r3c"].'" DISABLED>
                          l/m<span class="superpeque&ntilde;o">2</span></div>
                      </blockquote></td>
                  </tr>
                  <tr> 
                    <td colspan="4" bgcolor="#CCCC99" class="textopeque"> <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"> 
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