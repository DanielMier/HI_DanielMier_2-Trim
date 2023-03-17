<?php
require_once("../Modelo/class_post.php"); #llamamos al script class post
$post = new post(); #creamos la nueva clase 
$recordset = $post->getPosts(); # llamamos a la funcion getPosts donde selecionamos los registros de la base de datos


while($fila = mysqli_fetch_array($recordset)){ # con esto recorremos la tabla de posts hasta que no haya mas registros 
    // A partir de aqui es lenguaje HTML mezclado con los datos de la base de datos como el titulo, el email, la fecha y el contenido del post
    echo '<section class="pagina_contacto">';
    echo "<div>";
    echo '<h1 style="display:none;">'.$fila['id'].'</h1>';
    echo "<h1>".$fila['titulo']."</h1>";
    echo "<h3>".$fila['email']."   ".$fila['fecha']."</h3>";
    echo "<p>".$fila['contenido']."</p>";
    echo "<p>".$fila['imagen']."</p>";
    echo '<form action="" method="post"> 
    <input type="hidden" class="form-control" id="acction" name="acction" value="modificar">
    <button type="submit" class="btn btn-primary">Editar</button>
    </form>'; # con este formulario mostramos el boton de modificar, todavia no esta funcional pero se puede hacer funcional
    echo '<br>';
    echo '<form action="../modelo/post_controler.php" method="post">
    <input type="hidden" class="form-control" id="acction" name="acction" value="borrar">
    <input type="hidden" class="form-control" id="id" name="id" value="'.$fila['id'].'">
    <input type="hidden" class="form-control" id="email" name="email" value="'.$fila['email'].'">
    <button type="submit" class="btn btn-danger">Borrar</button>
    </form>'; #con este formulario mostramos el boton de eliminar, es completamente funcional y si el usuario esta registrado eliminara el post
    echo "</div>";
    echo "</section>";
}


?>