<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
 </head>
<body>
    <div class="content">
    <h1 class="titulo-elecciones" style="margin-top: 30px;margin-bottom: 40px;">
        Elecciones Generales 2025
    </h1>
  <form class="login-form" action="login.php" method="post">

    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label for="uname">Ingrese su correo electrónico</label>
    <input type="text" id="uname" name="uname" placeholder="Correo electrónico"><br>

    <label for="password">Ingrese su contraseña</label>
    <input type="password" id="password" name="password" placeholder="• • • • • • • • • •"><br>

    <button type="submit">Entrar</button>
  </form>
  <a href="recuperarContrasena.php" ><h3 class="pswd-rec">Recuperar Contraseña</h3></a>
  <a href="index.php" class="volver-home">Volver al menú de inicio</a>
</div>

</body>
<footer>
    <h2>Heyden Aldana - Héctor Funes - Bilander Fernández</h2>
    <h2>Copyright © todos los derechos reservados.</h2>
    <h2>Este es un proyecto simulado y no corresponde al modelo actual del sistema de elecciones generales en Honduras </h2>
  </footer>
</html>
