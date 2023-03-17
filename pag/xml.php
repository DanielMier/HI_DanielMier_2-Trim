
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style_json_xml.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <link rel="stylesheet" href="../css/style.css">
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/953f80cad3.js"
      crossorigin="anonymous"
    ></script>

    <title>Hito Grupal</title>
  </head>
  <body>
    <header>
      <div class="menu_principal">
              <label class="lnr lnr-menu"></label>
          
          
          <div class="menu">
              <div class="line"><a href="../index.php"><label class="lnr lnr-home"><font>Home</font></label></a></div>
              <div class="line"><a href=""><label class="lnr lnr-inbox"><font>Categorias</font></label></a></div>
              <div class="line"><a href="../controlador/login.php"><label class="lnr lnr-picture"><font>posts</font></label></a></div>

              <div class="line"><a href="contacto.html"><label class="lnr lnr-bullhorn"><font>RRSS</font></label></a></div>
          </div>
      </div>
        <!--      menu hamburgesa -->
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
        <li><a href="xml.php">XML</a></li>
        <li><a href="json.html">JSON</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="../controlador/nuevo_post.php">Hacer Publicacion</a></li>
      </ul>
  </nav>
</div>

    <section class="xml_json">
      <div id="xml_json">
        <div class="titulo" class="container">
          <h2>XML</h2>
        </div>
        <div class="contenido" class="row">
            <div class="col-10 col-lg-10 col-md-8 col-sm-8">
                <div class="bloque">
                    <h4>Orígenes de xml</h4>
                    <p>XML es un lenguaje de marcado diseñado para representar y guardar información estructurada en un formato legible tanto para personas como para ordenadores. Fue desarrollado por el W3C en 1996 como una actualización de HTML, con la intención de ser usado como un medio para compartir datos entre aplicaciones y plataformas. El XML proviene de un lenguaje que inventó IBM allá por los años 70. El lenguaje de IBM se llama GML,Este lenguaje gustó mucho a la gente de ISO, una entidad que se encarga de normalizar cosas de modo que allá por el 86 trabajaron para normalizar el lenguaje, creando el SGML, que no era más que el GML pero estándar.</p>
                </div>
                <div class="bloque">
                  <h4>Introduccion:</h4>
                  <p>
                    XML son las siglas en inglés de "eXtensible Markup Language" (Lenguaje de Marcado Extensible en español) y es un lenguaje de marcado utilizado para estructurar, almacenar y transportar información en formato de texto.<br>
                    En XML, los datos se organizan en elementos que están etiquetados con etiquetas o tags y se pueden anidar dentro de otros elementos. Cada elemento puede contener texto, atributos y otros elementos. XML es un lenguaje muy flexible y extensible, lo que significa que se puede definir un conjunto de etiquetas personalizadas para satisfacer las necesidades de una aplicación específica.<br>
                    XML se utiliza comúnmente para el intercambio de datos entre sistemas y aplicaciones, especialmente en la web y en la industria de la tecnología de la información. Es una tecnología clave para la interoperabilidad y la integración de sistemas.<br>
                  </p>
                </div>
                <div class="bloque">
                    <h4>Aplicaciones para xml:</h4>
                    <p>Intercambio de información entre aplicaciones y sistemas, especialmente en entornos heterogéneos.<br>
                      Representación de documentos y material multimedia.<br>
                      Configuración y personalización de aplicaciones.<br>
                      Almacenamiento de información y configuración de sistemas.<br>
                      </p>
                </div>
                <div class="bloque">
                  <h4>Normas de uso:</h4>
                  <p>Todos los elementos XML deben tener una etiqueta de cierre.<br>
                    Las etiquetas XML son sensibles a mayúsculas y minúsculas.<br>
                    Todos los elementos XML deben estar debidamente anidados.<br>
                    Todos los documentos XML debe tener un elemento raíz.<br>
                    Los valores de atributo siempre deben estar entre comillas.<br>
                    </p>
              </div>
              <div class="bloque">
                <h4>Caracteristicas xml:</h4>
                <p>Estructura jerárquica: XML organiza la información en una estructura jerárquica de elementos etiquetados, lo que permite una fácil comprensión y manipulación de los datos.<br>
                  Flexibilidad y extensibilidad: XML es muy flexible y se puede personalizar para satisfacer las necesidades específicas de una aplicación mediante la definición de etiquetas personalizadas (también llamadas "vocabulary" o "schema").<br>
                  Independiente de la plataforma: los documentos XML se pueden leer y procesar en cualquier plataforma o sistema operativo, lo que los hace muy útiles para la interoperabilidad entre sistemas.<br>
                  Legibilidad: los documentos XML están escritos en texto plano, lo que significa que son legibles tanto por humanos como por máquinas.<br>
                  Soporte de Unicode: XML admite el estándar Unicode, lo que significa que es capaz de manejar una amplia variedad de idiomas y caracteres.<br>
                  Separación de datos y presentación: XML se centra en los datos y no en la presentación, lo que significa que los datos pueden ser transformados y presentados en diferentes formas sin cambiar el contenido original.<br>
                  Validación: XML permite la validación de los documentos mediante el uso de esquemas (también llamados "schemas" o "DTD"), lo que ayuda a garantizar la calidad y la integridad de los datos.<br>
                  </p>
            </div>
            <div class="bloque">
              <h4>Sintaxis:</h4>
              <p>La sintaxis de XML (Extensible Markup Language) se basa en etiquetas que se utilizan para definir elementos y atributos que se utilizan para describir los datos. La sintaxis básica de XML se compone de los siguientes elementos:<br><br>

                Etiquetas: Los elementos XML se definen mediante etiquetas, que se representan mediante pares de corchetes angulares. Por ejemplo, elemento /elemento.<br>
                
                Atributos: Los atributos se utilizan para proporcionar información adicional sobre un elemento. Se representan dentro de la etiqueta de inicio del elemento y se especifican como pares de nombre y valor. Por ejemplo, elemento atributo="valor" /elemento.<br>
                
                Procesamiento de instrucciones: Las instrucciones de procesamiento se utilizan para proporcionar información sobre cómo se deben procesar los datos. Se representan mediante una etiqueta de apertura y una etiqueta de cierre . Por ejemplo, xml version="1.0" encoding="UTF-8".<br>
                
                Comentarios: Los comentarios se utilizan para agregar notas y explicaciones sobre el contenido de un documento XML. Se representan mediante una etiqueta de apertura <!-- y una etiqueta de cierre -->. Por ejemplo, <!-- Este es un comentario -->.<br></p>
          </div>
              <div id="bloque_horizontal" >
                <ul>
                    <li>Enlaces de interes y web grafia</li>
                    <li><a href="https://desarrolloweb.com/articulos/450.php">Enlace 1</a></li>
                    <li><a href="https://arxiu-web.upf.edu/hipertextnet/numero-3/xml.php#:~:text=El%20lenguaje%20XML%20">Enlace 2</a></li>
                    <li><a href="http://profesores.elo.utfsm.cl/~agv/elo330/2s04/projects/XML/XML.htm">Enlace 3</a></li>
                </ul>
            </div>
            </div>
            <div class="col-2 col-lg-2 col-md-2 col-sm-2">
                <div id="bloque_lateral" >
                    <ul>
                        <li>Enlaces de interes y web grafia</li>
                        <li><a href="https://desarrolloweb.com/articulos/450.php">Enlace 1</a></li>
                        <li><a href="https://arxiu-web.upf.edu/hipertextnet/numero-3/xml.php#:~:text=El%20lenguaje%20XML%20">Enlace 2</a></li>
                        <li><a href="http://profesores.elo.utfsm.cl/~agv/elo330/2s04/projects/XML/XML.htm">Enlace 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </section>

<!--     Pie de pagina -->
    <footer>
      <div class="footer">
        <div class="row">
          <ul>
            <li><a href="contacto.html">Contactanos</a></li>
            <li><a href="#">Politica de privaciad</a></li>
            <li><a href="#">Terminos y condiciones</a></li>
          </ul>
        </div>
  
        <div id="copy"  class="row">
          Copyright © - Derechos Reservados || Daniel Mier

        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>


