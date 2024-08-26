<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        echo"Registro exitoso.";
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("insert into persona(nombres, apellidos, dni, fecha_nac, correo)values('$nombres','$apellidos',$dni,'$fecha','$correo')");
        if ($sql==1) {
            echo '<div class= "alert alert-success">Registro exitoso.</div>';
        } else {
            echo '<div class= "alert alert-danger">Error al registrar persona.</div>';
        }
        
    }else{
        echo '<div class= "alert alert-warning">Alguno de los campos está vacío.</div>';
    }
}