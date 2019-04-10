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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena1/mail.php" method="post" target="_self" id="tutor1_1">
                  <table width="100%" cellpadding="6" cellspacing="6" >
                    <tr> 
                      <td width="50%" valign="top" class="textopeque"> <div align="justify"><strong>1</strong>. 
                          <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						  <input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
                          Redondea en cada caso a la cifra indicada:</div>
                        <blockquote> 
                          <div align="left"> 
                            <p><strong>a)</strong> 1237 a decenas &#8212;&gt; 
                              <input name="r1a" type="text" id="r1a2" size="6" value="'.$_POST["r1a"].'" DISABLED>
                            </p>
                            <p><strong>b)</strong> 53467 a unidades de millar 
                              &#8212;&gt; 
                              <input name="r1b" type="text" id="r1b2" size="6" value="'.$_POST["r1b"].'" DISABLED>
                            </p>
                          </div>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <p align="justify"><strong>2</strong>. 
                          Realiza las operaciones indicadas:</p>
                        <blockquote> 
                          <p align="justify"><strong>a)</strong> (3 &middot; 15 
                            + 18) : 9 - 7 =&nbsp; 
                            <input name="r2a" type="text" id="r2a2" size="6" value="'.$_POST["r2a"].'" DISABLED>
                          </p>
                          <p align="justify"> <strong>b)</strong> 3 &middot; 15 
                            + 18 : (9 - 7) = 
                            <input name="r2b" type="text" id="r2b2" size="6" value="'.$_POST["r2b"].'" DISABLED>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp; </p>
                        </blockquote>
                        <div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td rowspan="2" valign="top" class="textopeque"> <div align="justify" class="textopeque"> 
                          <p><strong>3.</strong> Calcula aplicando las propiedades 
                            de las potencias:</p>
                        </div>
                        <blockquote> 
                          <p><strong>a)</strong> (2<span class="superpeque&ntilde;o">4</span>)<span class="superpeque&ntilde;o">2</span>:2<span class="superpeque&ntilde;o">7</span> 
                            = 
                            <input name="r3a" type="text" id="r3a3" size="6" value="'.$_POST["r3a"].'" DISABLED>
                          </p>
                          <p><strong>b)</strong> 2<span class="superpeque&ntilde;o">5</span>&middot;5<span class="superpeque&ntilde;o">5</span> 
                            = &nbsp; 
                            <input name="r3b" type="text" id="r3b3" size="6" value="'.$_POST["r3b"].'" DISABLED>
                          </p>
                        </blockquote></td>
                      <td colspan="2" valign="top" class="textopeque"> <div align="justify"><strong>4.</strong> 
                          En un edificio de 12 plantas hay 9 ventanas en cada 
                          planta, cada ventana tiene cuatro cristales; si cada 
                          cristal cuesta 25 euros, &iquest;cu&aacute;nto cuestan 
                          los cristales de todo el edificio?</div></td>
                    </tr>
                    <tr> 
                      <td valign="top"> <div align="center"> 
                          <textarea name="r4a" cols="20" id="textarea" DISABLED> '.$_POST["r4a"].'</textarea>
                        </div></td>
                      <td valign="top" class="textopeque"> <div align="center">
                          <p>&nbsp;cuestan: &nbsp;&nbsp; <br>
                            <input name="r4b" type="text" id="r4b2" size="6" value="'.$_POST["r4b"].'" DISABLED>
                            &euro;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                        </div></td>
                    </tr>
                    <tr> 
                      <td bgcolor="#CCCC99" class="textopeque" colspan="3"> <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"> 
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