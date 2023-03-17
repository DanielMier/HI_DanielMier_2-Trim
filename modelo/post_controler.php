<?php

if (!empty($_POST['email'])) {#Comprobamos que el campo email lleva informacion

    require_once("class_usuarios.php"); #Llamamos a la calse usuarios 
    $usuario = new Usuario();
    $email = $_POST['email'];

    //Búsqueda en la base de datos del usuario para comprobar que existe 
    $recordset = $usuario->getUserByEmail($email);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){ #vemos si existe el usuario en la vase de datos 
        
        if(isset($_POST['acction'])) { #si el usuario existe, comprobamos que el campo action tiene algun valor
            $valor = $_POST['acction']; #action para saber si registrar, eliminar o modificar un registro
            echo "El valor de acction es: " . $valor; # mostrar por pantalla el valor de acction
            require('class_post.php'); #llamamos a la clase post
            $post = new post();
            switch($valor){ #creamos un switch para ejectuar una accio u otra, esto dependera del valor de acttion
                case 'registrar': # si acttion es = a registrar, se registra el post
                    $email = $_POST['email'];
                    $titulo = $_POST['titulo'];
                    $contenido = $_POST['contenido'];
                    $fecha = $_POST['fecha'];
                    $imagen = $_POST['imagen'];
                    
                    $resultado = $post->insert($email, $titulo, $contenido, $fecha, $imagen); #ejecutamos la funcion insertar de la calse post
                            
                    if ($resultado == 'OK'){
                        header("Location:../controlador/ver_post.php"); # si se registra el post, nos dirigira a ver los post
                    }else{
                        echo 'Algo ha fallado'; #si no se registra nos saldra un mensaje ed error
                    }
                    break;
                case 'borrar': # si acttion es = a borrar, elimina el post
                    $id = $_POST['id'];
                    $resultado = $post->deletePostById($id); #utilizamos la funcion para eliminar el registro

                    if ($resultado == 'OK'){
                        header("Location:../controlador/ver_post.php");  # si se registra el post, nos dirigira a ver los post
                    }else{
                        echo 'Algo ha fallado'; #si no se registra nos saldra un mensaje ed error
                    }
                break;
            }
        } else {
            echo "Algo ha ido mal."; # si acttion no tiene nigun valor nos dara un mensaje de error
        }
    } else {
        echo 'El Usuario '.$email.' no existe'; # si el email que introduce el usuario no existe en la base de datos nos lo mostrara por pantalla 
    }
} else {
    header("Location:../controlador/login.php");# si no ha cogido valor el campo de email, lo dirigira al login
}
