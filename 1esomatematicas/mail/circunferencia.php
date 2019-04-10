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
						<form action="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena10/mail.php" method="post" target="_self" id="tutor1_10">
                <table width="100%" cellpadding="6" cellspacing="6" >
                  <tr> 
                    <td colspan="2" valign="top" class="textopeque"> <div align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>1</strong>. 
                        <input name="act" id="act" type="hidden"  value="'.$_POST["act"].'" DISABLED >
						<input name="quincena" id="quincena" type="hidden"  value="'.$_POST["quincena"].'" DISABLED >
                        La circunferencia de la figura se ha dividido en 10 partes 
                        iguales, calcula los &aacute;ngulos se&ntilde;alados.</font></div></td>
                    <td colspan="2" valign="top" class="textopeque"> <p align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>2.</strong> 
                        Calcula el &aacute;rea de la parte coloreada en azul de 
                        la figura.</font></p></td>
                  </tr>
                  <tr> 
                    <td width="20%" valign="middle" class="textopeque"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena10/imagenes10/tutor1.gif" width="99" height="100"> 
                        </font></div></td>
                    <td width="30%" valign="top" class="textopeque"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>a)</strong> 
                      &Aacute;ngulo azul = 
                      <input name="r1a" type="text" id="r1a" size="6" value="'.$_POST["r1a"].'" DISABLED>
                      <span class="superpeque&ntilde;o">&ordm;<br>
                      </span><strong>b)</strong> &Aacute;ngulo rojo= 
                      <input name="r1b" type="text" id="r1b" size="6" value="'.$_POST["r1b"].'" DISABLED>
                      <span class="superpeque&ntilde;o">&ordm;</span> <br>
                      <strong>c)</strong> &Aacute;ngulo amarillo = 
                      <input name="r1c" type="text" id="r1c" size="6" value="'.$_POST["r1c"].'" DISABLED>
                      <span class="superpeque&ntilde;o">&ordm;</span> <strong><br>
                      d)</strong> &Aacute;ngulo verde = 
                      <input name="r1d" type="text" id="r1d" size="6" value="'.$_POST["r1d"].'" DISABLED>
                      <span class="superpeque&ntilde;o">&ordm;</span> <span class="superpeque&ntilde;o"> 
                      </span></font></td>
                    <td width="25%" valign="top" class="textopeque"> <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><img src="http://recursostic.educacion.es/secundaria/edad/1esomatematicas/1quincena10/imagenes10/tutor2.gif" width="115" height="94"> 
                        </font></p></td>
                    <td width="32%" valign="top" class="textopeque"> <p><font face="Verdana, Arial, Helvetica, sans-serif"> 
                        <textarea name="r2a" rows="3" id="r2a" DISABLED> '.$_POST["r2a"].'						  </textarea>
                        </font></p>
                      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">&Aacute;rea= 
                        <input name="r2b" type="text" id="r2b" size="6" value="'.$_POST["r2b"].'" DISABLED>
                        cm<span class="superpeque&ntilde;o">2</span></font></p></td>
                  </tr>
                  <tr> 
                    <td colspan="2" valign="top" class="textopeque"> <div align="justify" > 
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>3.</strong> 
                          La aguja horaria de un reloj mide 8 cm y la minutera 
                          10 cm, &iquest;qu&eacute; longitud de arco de circunferencia 
                          describe la aguja horaria en 2 horas?, &iquest;y la 
                          minutera en 15 minutos?.</font></p>
                      </div>
                      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">aguja 
                        horaria: 
                        <input name="r3a" type="text" id="r3a" size="6" value="'.$_POST["r3a"].'" DISABLED>
                        <br>
                        aguja minutera: </font><font face="Verdana, Arial, Helvetica, sans-serif"> 
                        <input name="r3b" type="text" id="r3b" size="6" value="'.$_POST["r3b"].'" DISABLED>
                        </font></p></td>
                    <td colspan="2" valign="top" class="textopeque"> <div align="justify"><font face="Verdana, Arial, Helvetica, sans-serif"><strong>4</strong>. 
                        Se dibujan dos circunferencias de 3 y 8 dm de radio, calcula 
                        la distancia entre sus centros si son:</font></div>
                      <div align="center"> 
                        <p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>a)</strong> 
                          Tangentes interiores &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d 
                          = &nbsp; 
                          <input name="r4a" type="text" id="r4a" size="6" value="'.$_POST["r4a"].'" DISABLED>
                          dm<strong><br>
                          b)</strong> Tangentes exteriores &nbsp;&nbsp;&nbsp;&nbsp;d&acute;= 
                          &nbsp; 
                          <input name="r4b" type="text" id="r4b" size="6" value="'.$_POST["r4b"].'" DISABLED>
                          dm</font></p>
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