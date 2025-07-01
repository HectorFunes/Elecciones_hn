 <!DOCTYPE html>
 <link rel="stylesheet" href="styles.css">
 <html>
 <script src="https://unpkg.com/feather-icons"></script>
 <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
 </head>
  <body>
    <header>
      <nav class="navbar">
        <ul class="nav-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Proceso de Votación</a></li>
          <li><a href="faq.html">Preguntas Frecuentes</a></li>
          <li><a href="frontend/Algoritmos/Algoritmos.html">Algoritmos</a></li>
        </ul>
      </nav>
    </header>
   <div class="content">
    <h1>Instrucciones</h1>
    <h2>Bienvenido a las elecciones generales de Honduras, donde podrás ejercer tu voto siguiendo los pasos listados a continuación.</h2>
   </div>
   <div class="pasos">
    <div>
        <h2>Paso 1</h2>
        <h2 style="font-size:42px">Ingresa con tus datos de DNI y tu nombre.</h2>
    </div>
    <div>
        <h2>Paso 2</h2>
        <h2 style="font-size:42px">Selecciona los candidatos por quien deseas votar</h2>
    </div>
    <div>
        <h2>Paso 3</h2>
        <h2 style="font-size:42px">Presiona el botón de "Siguiente" para confirmar tu voto</h2>
    </div>
    <div style="padding:0;align-items:center;">
      <a href="pre-votacion.php">
        <button style="display:flex;">
          <h2>Empezar</h2>
          <i style="margin-top:5px;" data-feather="arrow-right" width="65" height="65"></i>
        </button>
      </a>
      
    </div>
   </div>
   
    <script>
      feather.replace();
    </script>
    
    <?php
      //echo "hello world!";
    ?>
  </body>
  <footer>
    <h2>Heyden Aldana - Héctor Funes - Bilander Fernández</h2>
    <h2>Copyright © todos los derechos reservados.</h2>
    <h2>Este es un proyecto simulado y no corresponde al modelo actual del sistema de elecciones generales en Honduras </h2>
  </footer>
</html>
</DOCTYPE>