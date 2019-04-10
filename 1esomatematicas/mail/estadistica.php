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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena12/mail.php" method="post" target="_self" id="tutor1_12">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"> 
                          <p><strong>1</strong>. 
						  <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
						  Completa la siguiente tabla de 
                            frecuencias:</p>
                          <table width="80%" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#999966" class="textopeque">
                            <tr> 
                              <td><div align="center">VALORES</div></td>
                              <td><div align="center">Frecuencia abs.</div></td>
                              <td><div align="center">Frecuencia relat.</div></td>
                            </tr>
                            <tr> 
                              <td><div align="center">1</div></td>
                              <td><div align="center">3</div></td>
                              <td><div align="center">0,15</div></td>
                            </tr>
                            <tr> 
                              <td><div align="center">2</div></td>
                              <td><div align="center">4</div></td>
                              <td><div align="center">0,20</div></td>
                            </tr>
                            <tr> 
                              <td><div align="center">3</div></td>
                              <td><div align="center"> 
                                  <input name="r1a" type="text" id="r1a" size="4" value="'.$_POST["r1a"].'" DISABLED>
                                </div></td>
                              <td><div align="center">0,40</div></td>
                            </tr>
                            <tr> 
                              <td><div align="center">4</div></td>
                              <td><div align="center">5</div></td>
                              <td> <div align="center"> 
                                  <input name="r1b" type="text" id="r1b" size="4" value="'.$_POST["r1b"].'" DISABLED>
                                </div></td>
                            </tr>
                            <tr> 
                              <td><div align="center">SUMA</div></td>
                              <td><div align="center">20</div></td>
                              <td><div align="center">1</div></td>
                            </tr>
                          </table>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify" class="textopeque"> 
                          <p><strong>2.</strong> Si representamos los datos del 
                            ejercicio n&ordm; 1 en un diagrama de sectores, indica 
                            el &aacute;ngulo en grados que corresponde a cada 
                            valor:</p>
                        </div>
                        <p align="center"><strong>a)</strong> 1 &#8212;&gt;&nbsp; 
                          <input name="r2a" type="text" id="r2a" size="6" value="'.$_POST["r2a"].'" DISABLED>
                          <strong><br>
                          </strong> <strong>b)</strong> 2 &#8212;&gt;&nbsp; 
                          <input name="r2b" type="text" id="r2b" size="6" value="'.$_POST["r2b"].'" DISABLED>
                          <br>
                          <strong>c)</strong> 3 &#8212;&gt;&nbsp; 
                          <input name="r2c" type="text" id="r2c" size="6" value="'.$_POST["r2c"].'" DISABLED>
                          <br>
                          <strong>d) </strong>4 &#8212;&gt;&nbsp; 
                          <input name="r2d" type="text" id="r2d" size="6" value="'.$_POST["r2d"].'" DISABLED>
                        </p>
                        <div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify" class="textopeque"> 
                          <p><strong>3.</strong> Calcula la probabilidad de obtener 
                            un m&uacute;ltiplo de 3 al lanzar un dado.</p>
                          <p align="center">probabilidad = 
                            <input name="r3a" type="text" id="r3a" size="6" value="'.$_POST["r3a"].'" DISABLED>
                          </p>
                        </div></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"> 
                          <p><strong>4.</strong> En una bolsa hay 4 bolas rojas, 
                            5 verdes y 1 azul. Extraemos una bola, &iquest;qu&eacute; 
                            probabilidad hay de que sea roja?.</p>
                          <p align="center">probabilidad= 
                            <input name="r4a" type="text" id="r4a" size="6" value="'.$_POST["r4a"].'" DISABLED>
                          </p>
                        </div></td>
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