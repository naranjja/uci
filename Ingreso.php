<html>

<head>
	<title>Ingreso</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<style>div#ingreso{background-color: rgb(39,146,224)}</style>
</head>

<body>

<nav>
	
	<div class="menu" id="ingreso">
		<p class="menuLabel">Ingreso</p>
	</div>

	<div class="menu" id="estancia">
		<p class="menuLabel">Estancia</p>
	</div>

	<div class="menu" id="transferencia">
		<p class="menuLabel">Transferencia</p>
	</div>

	<div class="menu" id="alta">
		<p class="menuLabel">Alta</p>
	</div>	

</nav>

<form 
	action="procesarIngreso.php" 
	method="post" 
	oninput="nombre.value=apellido1.value+space.value+apellido2.value+space.value+prenombres.value">

	<input type="text" id="space" value=" ">

	<div class="banner">
		<output id="nombre">
	</div>

<section role="Datos generales">

	<p class="title">Datos generales</p>

	<p id="label">Primer apellido</p>
	<input type="text" class="text" name="apellido1" autofocus="on">

	<p id="label">Segundo apellido</p>
	<input type="text" class="text" name="apellido2">

	<p id="label">Pre nombres</p>
	<input type="text" class="text" name="prenombres">

	<p id="label">Fecha de nacimiento</p>
	<input type="text" id="dia" name="nac_dia" placeholder="día" maxlength="2">
	<input type="text" id="mes" name="nac_mes" placeholder="mes" maxlength="2">
	<input type="text" id="ano" name="nac_ano" placeholder="año" maxlength="4">

	<p id="label">Sexo</p>
	<select id="sexo" name="sexo">
		<option value="desconocido"></option>
		<option value="masculino">MASCULINO</option>
		<option value="femenino">FEMENINO</option>
	</select>

	<p id="label">Edad</p>
	<input type="text" class="text" name="edad">

</section>

<section role="Datos de ingreso">
	
	<p class="title">Datos de ingreso</p>

	<p id="label">Número de historial clínico</p>
	<input type="text" class="text" name="historial">

	<p id="label">Motivo de admisión</p>
	<input type="text" class="text" name="motivo">

	<p id="label">Fecha de ingreso al INSN</p>
	<input type="text" id="dia" name="ing_insn_dia" placeholder="día" maxlength="2">
	<input type="text" id="mes" name="ing_insn_mes" placeholder="mes" maxlength="2">
	<input type="text" id="ano" name="ing_insn_ano" placeholder="año" maxlength="4">	

	<p id="label">Hora de ingreso al INSN</p>
	<input type="text" id="hora" name="ing_insn_hora" placeholder="hora" maxlength="2">
	<input type="text" id="minuto" name="ing_insn_minuto" placeholder="minuto" maxlength="2">

	<p id="label">Ingreso al UCI</p>
	<input type="text" id="dia" name="ing_uci_dia" placeholder="día" maxlength="2">
	<input type="text" id="mes" name="ing_uci_mes" placeholder="mes" maxlength="2">
	<input type="text" id="ano" name="ing_uci_ano" placeholder="año" maxlength="4">

	<p id="label">Hora de ingreso al UCI</p>
	<input type="text" id="hora" name="ing_uci_hora" placeholder="hora" maxlength="2">
	<input type="text" id="minuto" name="ing_uci_minuto" placeholder="minuto" maxlength="2">

</section>

<section role="Datos de procedencia">

	<p class="title">Datos de procedencia</p>

	<p id="label">Departamento de procedencia</p>
	<input type="text" class="text" name="proc_dept">

	<p id="label">Servicio de procedencia</p>
	<input type="text" class="text" name="proc_serv">

	<p id="label">Otra procedencia</p>
	<input type="text" class="text" name="proc_otro">

</section>

<section role="Diagnósticos">

	<p class="title">Datos de diagnóstico</p>

	<p id="label">Diagnóstico 1</p>
	<input type="text" id="dx_codigo" name="dx1_codigo" disabled placeholder="código">
	<input type="text" id="dx_descrp" class="text" name="dx1_descrp" autocomplete="on">

	<p id="label">Diagnóstico 2</p>
	<input type="text" id="dx_codigo" name="dx2_codigo" disabled placeholder="código">
	<input type="text" id="dx_descrp" class="text" name="dx2_descrp" autocomplete="on">

	<p id="label">Diagnóstico 3</p>
	<input type="text" id="dx_codigo" name="dx3_codigo" disabled placeholder="código">
	<input type="text" id="dx_descrp" class="text" name="dx3_descrp" autocomplete="on">

	<p id="label">Diagnóstico 4</p>
	<input type="text" id="dx_codigo" name="dx4_codigo" disabled placeholder="código">
	<input type="text" id="dx_descrp" class="text" name="dx4_descrp" autocomplete="on">

	<p id="label">Diagnóstico 5</p>
	<input type="text" id="dx_codigo" name="dx5_codigo" disabled placeholder="código">
	<input type="text" id="dx_descrp" class="text" name="dx5_descrp" autocomplete="on">

</section>

<div role="botones">

	<div id="submit">
		<p id="buttonlabel">Enviar datos</p>
		<input type="submit" id="submit">
	</div>

	<div id="reset">
		<p id="buttonlabel">Borrar datos</p>
		<input type="reset" id="reset">
	</div>

</div>

</form>

<footer>Hospital del Niño - Unidad de Cuidados Intensivos</footer>

</body>

</html>