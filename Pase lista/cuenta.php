<?php
  require 'conexion.php';

$id= $_GET['id'];
$nivel_grado_academico = $_GET['nivel'];
$duracion_curso = $_GET['duracion'];
$carrera = $_GET['carrera'];
$alumno = $_GET['nombre'];
$calendario= $_GET['calendario'];
$porcentaje_asistencia = $_GET['porcentaje_asistencia'];
$porcentaje_inasistencia = $_GET['porcentaje_inasistencia'];
$numero_inasistencias = $_GET['num_inasistencias'];

$sql = "INSERT INTO LISTA VALUES ($id,'$nivel_grado_academico','$duracion_curso','$carrera','$alumno','$calendario','$porcentaje_asistencia','$porcentaje_inasistencia',$numero_inasistencias)";

//echo "".$sql;
$crear->query($sql);
if($crear->affected_rows>=1){
	echo "datos creados";
}
else{
	echo "error al ingresar";
}

?>
