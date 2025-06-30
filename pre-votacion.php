<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
 </head>
<body>
    <header>
      <nav class="navbar">
        <ul class="nav-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="proceso.php">Proceso de Votación</a></li>
          <li><a href="faq.html">Preguntas Frecuentes</a></li>
          <li><a href="frontend/Algoritmos/Algoritmos.html">Algoritmos</a></li>
        </ul>
      </nav>
    </header>
    <div class="content">
        <br>
    <h1>
        Antes de comenzar, debe ingresar la siguiente información para validar su voto. Esto lo ayuda a usted y al pueblo a hacer este proceso más transparente.
    </h1>
  <form style="border-color:transparent;" class="login-form" action="#" method="post">

    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label for="uname">Ingrese su DNI:
        <input type="text" id="uname" name="uname" placeholder="DNI"><br>
    </label>
    <label for="password">Ingrese su nombre:
        <input type="text" id="uname" name="uname" placeholder="Nombre"><br>
    </label>
    <button type="submit">Empezar</button>
  </form>
</div>

</body>
<footer>
    <h2>Heyden Aldana - Héctor Funes - Bilander Fernández</h2>
    <h2>Copyright © todos los derechos reservados.</h2>
    <h2>Este es un proyecto simulado y no corresponde al modelo actual del sistema de elecciones generales en Honduras </h2>
  </footer>
</html>
