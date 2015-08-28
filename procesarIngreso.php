<?php

define('DB_NAME', 'uci');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$prenombres = $_POST['prenombres'];
$nombre = $apellido1 . " " . $apellido2 . " " . $prenombres;
$sql = "INSERT INTO paciente (nombre) VALUES ('$nombre')";

$nac_dia = $_POST['nac_dia'];
$nac_mes = $_POST['nac_mes'];
$nac_ano = $_POST['nac_ano'];
$fechaNac = $nac_dia . "/" . $nac_mes . "/" . $nac_ano;
$sql = "INSERT INTO paciente (fechaNac) VALUES ('$fechaNac')";

$sexo = $_POST['sexo'];
$sql = "INSERT INTO paciente (sexo) VALUES ('$sexo')";

$edad = $_POST['edad'];
$sql = "INSERT INTO paciente (edad) VALUES ('$edad')";

$historial = $_POST['historial'];
$sql = "INSERT INTO paciente (historial) VALUES ('$historial')";

$motivo = $_POST['motivo'];
$sql = "INSERT INTO paciente (motivo) VALUES ('$motivo')";

$ing_insn_dia = $_POST['ing_insn_dia'];
$ing_insn_mes = $_POST['ing_insn_mes'];
$ing_insn_ano = $_POST['ing_insn_ano'];
$fechaIngINSN = $ing_insn_dia . "/" . $ing_insn_mes . "/" . $ing_insn_ano;
$sql = "INSERT INTO paciente (fechaIngINSN) VALUES ('$fechaIngINSN')";

$ing_insn_hora = $_POST['ing_insn_hora'];
$ing_insn_minuto = $_POST['ing_insn_minuto'];
$horaIngINSN = $ing_insn_hora . ":" . $ing_insn_minuto;
$sql = "INSERT INTO paciente (horaIngINSN) VALUES ('$horaIngINSN')";

$ing_uci_dia = $_POST['ing_uci_dia'];
$ing_uci_mes = $_POST['ing_uci_mes'];
$ing_uci_ano = $_POST['ing_uci_ano'];
$fechaIngUCI = $ing_uci_dia . "/" . $ing_uci_mes . "/" . $ing_uci_ano;
$sql = "INSERT INTO paciente (fechaIngUCI) VALUES ('$fechaIngUCI')";

$ing_uci_hora = $_POST['ing_uci_hora'];
$ing_uci_minuto = $_POST['ing_uci_minuto'];
$horaIngUCI = $ing_uci_hora . ":" . $ing_uci_minuto;
$sql = "INSERT INTO paciente (horaIngUCI) VALUES ('$horaIngUCI')";

$proc_dept = $_POST['proc_dept'];
$sql = "INSERT INTO paciente (proc_dept) VALUES ('$proc_dept')";

$proc_serv = $_POST['proc_serv'];
$sql = "INSERT INTO paciente (proc_serv) VALUES ('$proc_serv')";

$proc_otro = $_POST['proc_otro'];
$sql = "INSERT INTO paciente (proc_otro) VALUES ('$proc_otro')";

$dx1_codigo = $_POST['dx1_codigo'];
$sql = "INSERT INTO paciente (dx1_codigo) VALUES ('$dx1_codigo')";

$dx1_descrp = $_POST['dx1_descrp'];
$sql = "INSERT INTO paciente (dx1_descrp) VALUES ('$dx1_descrp')";

$dx2_codigo = $_POST['dx2_codigo'];
$sql = "INSERT INTO paciente (dx2_codigo) VALUES ('$dx2_codigo')";

$dx2_descrp = $_POST['dx2_descrp'];
$sql = "INSERT INTO paciente (dx2_descrp) VALUES ('$dx2_descrp')";

$dx3_codigo = $_POST['dx3_codigo'];
$sql = "INSERT INTO paciente (dx3_codigo) VALUES ('$dx3_codigo')";

$dx3_descrp = $_POST['dx3_descrp'];
$sql = "INSERT INTO paciente (dx3_descrp) VALUES ('$dx3_descrp')";

$dx4_codigo = $_POST['dx4_codigo'];
$sql = "INSERT INTO paciente (dx4_codigo) VALUES ('$dx4_codigo')";

$dx4_descrp = $_POST['dx4_descrp'];
$sql = "INSERT INTO paciente (dx4_descrp) VALUES ('$dx4_descrp')";

$dx5_codigo = $_POST['dx5_codigo'];
$sql = "INSERT INTO paciente (dx5_codigo) VALUES ('$dx5_codigo')";

$dx5_descrp = $_POST['dx5_descrp'];
$sql = "INSERT INTO paciente (dx5_descrp) VALUES ('$dx5_descrp')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>