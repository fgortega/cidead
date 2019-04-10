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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena3/mail.php" method="post" target="_self" id="tutor1_3">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"><strong>1</strong>. 
						<input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >                    
						<input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Efect&uacute;a estas operaciones:</div>
                        <blockquote> 
                          <div align="left"> 
                            <p><strong>a)</strong> 10 + (-6 + 16) = 
                              <input name="r1a" type="text" id="r1a" size="6" value="'.$_POST["r1a"].'" DISABLED>
                            </p>
                            <p><strong>b)</strong> -10 - (6 - 16) - 2 = 
                              <input name="r1b" type="text" id="r1b" size="6" value="'.$_POST["r1b"].'" DISABLED>
                            </p>
                          </div>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <p align="justify"><strong>2.</strong> 
                          Realiza las operaciones indicadas:<strong></strong></p>
                        <p><strong>a)</strong> -5 + 4 &middot; (-2) = 
                          <input name="r2a" type="text" id="r2a" size="6" value="'.$_POST["r2a"].'" DISABLED>
                        </p>
                        <p><strong>b)</strong> (-5 + 4) &middot; (-2) = 
                          <input name="r2b" type="text" id="r2b" size="6" value="'.$_POST["r2b"].'" DISABLED>
                          &nbsp;&nbsp;&nbsp;&nbsp; </p>
                        <div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="50%" rowspan="2" valign="top" class="textopeque"> 
                        <div align="justify" class="textopeque"> 
                          <p><strong>3</strong>. Escribe en orden creciente estos 
                            n&uacute;meros:</p>
                        </div>
                        <blockquote> 
                          <p align="center">-31, 66, -37, 15, -2, 0, 5</p>
                          <p align="center"> 
                            <input name="r3a" type="text" id="r3a" size="36" value="'.$_POST["r3a"].'" DISABLED>
                          </p>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"><strong>4.</strong> 
                          En un bid&oacute;n hay 10 litros de agua, Juan echa 
                          4 cubos de 5 litros cada uno, m&aacute;s tarde Pedro 
                          saca 3 cubos de 7 litros y por &uacute;ltimo Mar&iacute;a 
                          saca un cubo de 6 litros. &iquest;Cu&aacute;ntos litros 
                          quedan en el bid&oacute;n?</div></td>
                    </tr>
                    <tr> 
                      <td width="24%" valign="top" DISABLED> '.$_POST["r4a"].'s operaciones</textarea></td>
                      <td width="26%" valign="top" class="textopeque"><div align="center">&nbsp;resultado: 
                          <input name="r4b" type="text" id="r4b" size="6" value="'.$_POST["r4b"].'" DISABLED>
                          litros</div></td>
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