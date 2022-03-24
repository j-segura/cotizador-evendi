<?php

include("con_db.php");

if(isset($_POST['enviar'])){
    $name = trim($_POST['name']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $ciudad = trim($_POST['ciudad']);
    $paraQue = trim($_POST['pregunta1']);

    if($paraQue === 'difundir'){
        $tipo = $_POST['pregunta2'];
        $ofrece = "no aplica";
        $caracteristicas = $_POST['secciones'];
        $carritoCompras = "no aplica";
        $plataformaEnvios = "no aplica";
    
        if(empty($_POST['mas20'])){
            $productos = $_POST['pregunta4'];
        }else{
            $productos = $_POST['mas20'];
        }

        $fecha = date("d/m/y");
        
        $consulta = "INSERT INTO datos(nombre, apellidos, email, ciudad, para, tipo, ofrece, secciones, carrito, envios, num_productos, fecha) VALUES ('$name','$apellidos','$email','$ciudad','$paraQue','$tipo','$ofrece','$caracteristicas','$carritoCompras','$plataformaEnvios','$productos','$fecha')";

        $resultado = mysqli_query($conex,$consulta);

        /* if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    } */

    }else{

        $tipo = "no aplica";
        $ofrece = $_POST['pregunta2-form2'];
        $caracteristicas = $_POST['secciones'];
        $carritoCompras = $_POST['pregunta4-form2'];
        $plataformaEnvios = $_POST['pregunta5-form2'];
    
        if(empty($_POST['mas20_2'])){
            $productos = $_POST['pregunta6'];
        }else{
            $productos = $_POST['mas20_2'];
        }

        $fecha = date("d/m/y");
        
        $consulta = "INSERT INTO datos(nombre, apellidos, email, ciudad, para, tipo, ofrece, secciones, carrito, envios, num_productos, fecha) VALUES ('$name','$apellidos','$email','$ciudad','$paraQue','$tipo','$ofrece','$caracteristicas','$carritoCompras','$plataformaEnvios','$productos','$fecha')";

        $resultado = mysqli_query($conex,$consulta);
        /* if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    } */
    }

}

?>