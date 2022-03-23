<?php

$paraQue = $_POST['pregunta1'];

if($paraQue === 'difundir'){
    $tipo = $_POST['pregunta2'];
    $caracteristicas = $_POST['checkbox_form1'];
    

    if(empty($_POST['mas20'])){
        $productos = $_POST['pregunta4'];
    }else{
        $productos = $_POST['mas20'];
    }

    echo "¿Para qué necesitas tu sitio? $paraQue";
    echo "<br>";
    echo "tipo de pagina: $tipo";
    echo "<br>";
    echo "caracteristicas: $caracteristicas";
    echo "<br>";
    echo "productos: $productos";
    echo "<br>";

}else{
    $ofreces = $_POST['pregunta2-form2'];
    $caracteristicas = $_POST['checkbox_form2'];
    $carritoCompras = $_POST['pregunta4-form2'];
    $plataformaEnvios = $_POST['pregunta5-form2'];
    
    if(empty($_POST['mas20_2'])){
        $productos = $_POST['pregunta6'];
    }else{
        $productos = $_POST['mas20_2'];
    }

    echo "¿Para qué necesitas tu sitio? $paraQue";
    echo "<br>";
    echo "Ofreces: $ofreces";
    echo "<br>";
    echo "Caracteristicas: $caracteristicas";
    echo "<br>";
    echo "Carrito de compras: $carritoCompras";
    echo "<br>";
    echo "Plataforma de envios: $plataformaEnvios";
    echo "<br>";
    echo "productos: $productos";
    echo "<br>";
}






?>