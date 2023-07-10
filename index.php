<?php
require 'connection.php';

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
    $fecha = $_POST['fecha'];
    $emergencia = $_POST['emergencia'];
    $nombre = $_POST['nombre'];
    $institucion = $_POST['institucion'];
    $profesion = $_POST['profesion'];
    $celular = $_POST['celular'];   
    $correo = $_POST['correo'];
    $hora_inicio = $_POST['hora-inicio'];
    $hora_final = $_POST['hora-final'];
    $condicion_fisica_prev = $_POST['condicion-fisica-prev'];
    $condicion_fisica_post = $_POST['condicion-fisica-post'];
    $condicion_psico_prev = $_POST['condicion-psico-prev'];
    $condicion_psico_post = $_POST['condicion-psico-post'];

    // Validar fecha
    if(!empty($fecha)) {
        //
    }else {
        $errores .= 'Por favor ingresa una fecha <br>';
    }

    // Validar emergencia
    if(!empty($emergencia)) {
        $emergencia = trim($emergencia);
        $emergencia = filter_var($emergencia, FILTER_SANITIZE_STRING);
    }else {
        // $errores .= 'Por favor ingresa un tipo de emergencia <br>';
    }

    // Validar nombre
    if(!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa un nombre <br>';
    }

    // Validar institución
    if(!empty($institucion)) {
        $institucion = trim($institucion);
        $institucion = filter_var($institucion, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una institución <br>';
    }

    // Validar profesión
    if(!empty($profesion)) {
        $profesion = trim($profesion);
        $profesion = filter_var($profesion, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una profesión <br>';
    }

    // Validar celular
    if(!empty($celular)) {
        $celular = trim($celular);
        $celular = filter_var($celular, FILTER_SANITIZE_NUMBER_INT);
    }else {
        $errores .= 'Por favor ingresa un número de celular <br>';
    }

    //Validar correo
    if(!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Por favor ingresa un correo valido <br>';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br>';
    }

    // Validar hora inicio
    if(!empty($hora_inicio)) {
        $hora_inicio = trim($hora_inicio);
        $hora_inicio = filter_var($hora_inicio, FILTER_SANITIZE_NUMBER_INT);
    }else {
        $errores .= 'Por favor ingresa una hora de inicio <br>';
    }

    // Validar hora final
    if(!empty($hora_final)) {
        $hora_final = trim($hora_final);
        $hora_final = filter_var($hora_final, FILTER_SANITIZE_NUMBER_INT);
    }else {
        $errores .= 'Por favor ingresa una hora de finalización <br>';
    }

    // Condición fisica previa
    if(!empty($condicion_fisica_prev)) {
        $condicion_fisica_prev = trim($condicion_fisica_prev);
        $condicion_fisica_prev = filter_var($condicion_fisica_prev, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una condición fisica al inicio de jornada <br>';
    }

    // Condición fisica posterior
    if(!empty($condicion_fisica_post)) {
        $condicion_fisica_post = trim($condicion_fisica_post);
        $condicion_fisica_post = filter_var($condicion_fisica_post, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una condición fisica al finalizar jornada <br>';
    }

    // Condición psicologica previa
    if(!empty($condicion_psico_prev)) {
        $condicion_psico_prev = trim($condicion_psico_prev);
        $condicion_psico_prev = filter_var($condicion_psico_prev, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una condición psicológica al inicio de jornada <br>';
    }

    // Condición psicologica posterior
    if(!empty($condicion_psico_post)) {
        $condicion_psico_post = trim($condicion_psico_post);
        $condicion_psico_post = filter_var($condicion_psico_post, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Por favor ingresa una condición psicológica al finalizar jornada <br>';
    }

    if(!$errores){
    	// $enviado = true;
    	$query = "INSERT INTO tb_registros VALUES(NULL, '$fecha', '$emergencia', '$nombre', '$institucion', '$profesion', '$celular', '$correo', '$hora_inicio', '$hora_final', '$condicion_fisica_prev', '$condicion_fisica_post', '$condicion_psico_prev', '$condicion_psico_post')";
    	mysqli_query($conn, $query);

    	if(!$conn){
       	    	die("Connection failed: ".mysqli_connect_error());
    	}else {
        	echo 
        	"
       		 <script> alert('Datos registrados correctamente'); window.location.href = 'index.php'; </script>
       		 ";
    		}
	}
}

   

require 'index.view.php';
?>