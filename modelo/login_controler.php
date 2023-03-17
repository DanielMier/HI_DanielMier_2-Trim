<?php

if (!empty($_POST['nombre']) AND !empty($_POST['password']) ) {

    require_once("class_usuarios.php");
    $usuario = new Usuario();
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

     //Busqueda en la base de datos del usuario

    $recordset = $usuario->getUserByPassword($nombre, $password);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        header("Location:../controlador/ver_post.php");
    }else{
        echo 'Usuario no existe';
        header("Location:../controlador/login.php");

    }


} else{
    header("Location:../controlador/login.php");
}

?>