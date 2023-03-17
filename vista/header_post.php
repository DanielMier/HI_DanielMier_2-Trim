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
              <div class="line"><a href="../index.php"><label class="lnr lnr-home"><font>Home</font></label></a></div>
              <div class="line"><a href=""><label class="lnr lnr-inbox"><font>Categorias</font></label></a></div>
              <div class="line"><a href="../controlador/login.php"><label class="lnr lnr-picture"><font>posts</font></label></a></div>



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
          <li><a href="../index.php">Home</a></li>
          <li><a href="../pag/xml.php">XML</a></li>
          <li><a href="../pag/json.html">JSON</a></li>
          <li><a href="../pag/contacto.html">Contacto</a></li>
          <li><a href="../controlador/nuevo_post.php">Hacer Publicacion</a></li>
      </ul>
  </nav>
</div>