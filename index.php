<?php 
#Ponemos la hora de españa
date_default_timezone_set('Europe/Madrid');
#Creamos la cookie con la ip del equipo y la fecha de inicio
setcookie("ip", $_SERVER["REMOTE_ADDR"]);
setcookie("fecha", date('d-m-Y h:i:s'));
#Para ver si esta cogiendo datos hago unarchivo de texto
$cookieip= $_COOKIE['ip'];
$cookiefecha = $_COOKIE['fecha'];
$file = fopen("cookies/cookies.txt","a");
fwrite($file, $cookieip.PHP_EOL);#con esto escribe la ip en el archivo de texto
fwrite($file, $cookiefecha.PHP_EOL);# con esto escribe la hora enel archivo de texto
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hito Grupal</title>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!--     css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_home.css">
<!--    Font Awesome -->
    <script
    src="https://kit.fontawesome.com/953f80cad3.js"
    crossorigin="anonymous"
  ></script>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
  

  <body>
    <header>
      <div class="menu_principal">
              <label class="lnr lnr-menu"></label>
          
          
          <div class="menu">
              <div class="line"><a href="index.php"><label class="lnr lnr-home"><font>Home</font></label></a></div>
              <div class="line"><a href=""><label class="lnr lnr-inbox"><font>Categorias</font></label></a></div>
              <div class="line"><a href="controlador/login.php"><label class="lnr lnr-picture"><font>posts</font></label></a></div>
              <div class="line"><a href="pag/contacto.html"><label class="lnr lnr-bullhorn"><font>RRSS</font></label></a></div>
          </div>
      </div>
        <!--      menu hamburguesa -->
        <div class="menu_desplegable">
          <button onclick="myFunction()" class="boton_menu"><i class="fa-solid fa-bars"></i></button>
          <div id="myDropdown" class="dropdown-content">
            <a href="#">Home</a>
            <a href="pag/json.html">JSON</a>
            <a href="pag/xml.php">XML</a>
            <a href="pag/contacto.html">Contacto</a>
          </div>
        </div>
    </header>
<!--     Menu navegacion  -->
<div id="header">
  <nav>
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pag/xml.php">XML</a></li>
          <li><a href="pag/json.html">JSON</a></li>
          <li><a href="pag/contacto.html">Contacto</a></li>
          <li>
            <div>
              <a href="controlador/login.php">Iniciar Sesion</a>
              <a href="#"> | </a>
              <a href="controlador/nuevo_usuario.php">Registrarse</a>
            </div>
          </li>
      </ul>
  </nav>
</div>

<!--     Inicio -->

<div class="centro">
  <div class="contenido">
    <div id="titulo">
      <h2>Grupo 2</h2>
    </div>
    <div id="subtitulo" class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <h4>Para realizar una publicacion inicia Sesion</h4>
        </div>
        
      </div>
      
    </div>
    <div id="texto" class="container">
      <div class="row">
        <div class="col-10 col-lg-10 col-md-8 col-sm-6">
          <p>Somos el grupo 2 compuesto por Daniel, Pablo y David, este es nustro hito grupal: <br>
           En esta web puedes consultar informacion sobre XML y JSON. </p>
          <div class="bloque">
            <img src="img/xml-removebg-preview.png" alt="">
            <h4 id="xml">XML</h4>
            <p>XML es un lenguaje de marcado diseñado para representar y guardar información estructurada en un formato legible tanto para personas como para ordenadores.</p>
          </div>
          <div class="bloque">
            <img id="json" src="img/json-removebg-preview.png" alt="">
            <h4>JSON</h4>
            <p>JSON es un formato ligero de intercambio de datos, basado en un subconjunto de la sintaxis de objetos en JavaScript.</p>
          </div>
          <div class="bloque">
            <p>Tanto XML como JSON son ampliamente utilizados en aplicaciones web y móviles para representar y transferir información. No obstante, JSON es más adecuado para aplicaciones en tiempo real, mientras que XML es más apto para aplicaciones que requieren una estructuración más detallada de los datos y la posibilidad de procesarlos.
            </p>
          </div>
          <div class="bloque">
            <h4>Diferencias</h4>
            <p>XML y JSON son dos formatos de intercambio de datos populares en la web, pero difieren en algunos aspectos:<br><br>
              Estructura: XML utiliza una estructura de árbol jerárquico, mientras que JSON utiliza una estructura de pares de clave-valor.<br>
              Tamaño: JSON es generalmente más compacto que XML, lo que significa que se puede transmitir y procesar más rápido.<br>
              Legibilidad: XML es más legible por humanos que JSON, debido a su formato estructurado y la inclusión de etiquetas. En cambio, JSON es más fácil de leer para las aplicaciones debido a su formato simplificado.<br>
              Validación: XML se puede validar mediante el uso de DTD o esquemas, lo que garantiza la integridad y la calidad de los datos. En cambio, JSON no tiene soporte nativo para la validación, aunque hay herramientas disponibles para validar datos JSON.<br>
              Flexibilidad: XML es más flexible que JSON en términos de personalización de etiquetas y la definición de esquemas para la validación de datos. En cambio, JSON es más limitado en su estructura y no permite la definición de tipos de datos personalizados.<br>
              Uso con JavaScript: JSON fue diseñado para su uso con JavaScript, lo que significa que se integra bien con aplicaciones web que utilizan JavaScript. XML se puede utilizar con JavaScript, pero no es tan compatible como JSON.<br><br>
              En general, la elección entre XML y JSON depende del uso que se le dará a los datos y de las necesidades específicas de la aplicación. Si se requiere una estructura de datos más compleja y una validación rigurosa, XML puede ser una mejor opción. Si se necesita una estructura de datos más simple y una mayor velocidad de procesamiento, JSON puede ser más adecuado.<br></p>
          </div>
        </div>

      <div id="der" class="col-2 col-lg-2 col-md-2 col-sm-1">
        <ul>
          <li style="font-weight: 600;">Novedades</li>
          <li><a href="pag/json.html">JSON</a></li>
          <li><a href="pag/xml.php">XML</a></li>
          <li><a href="controlador/login.php">Hacer Publicacion</a></li>
        </ul>
      </div>
      </div>
      
    </div>
  </div>
</div>

    <footer>
      <div class="footer">
        <div class="row">
          <ul>
            <li><a href="pag/contacto.html">Contactanos</a></li>
            <li><a href="#">Politica de privaciad</a></li>
            <li><a href="#">Terminos y condiciones</a></li>
          </ul>
        </div>
  
        <div id="copy" class="row">
          Copyright © - Derechos Reservados || Daniel Mier

        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
