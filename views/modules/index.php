<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biomatic</title>
    <link rel="stylesheet" href="views/assets/css/login.css">
  </head>
  <body>
    <div id="loginModal">
      <div class="container--modal">
        <span id="closeModal">&times;</span>
      <img src="views/assets/image/logo.png" alt="logo">
      <form  id="formLogin">
        <div class="form--group">
          <input type="email" id="email" class="login--input" required>
          <label for="email" class="login--label">Correo:</label>
        </div>
        <div class="form--group">
          <input type="password" id="password" class="login--input" required>
          <label for="password" class="login--label">Contraseña:</label>
        </div>
        <div class="form--group">
          <input type="submit" value="ingresar" class="btn">
        </div>
      </form>
    </div>
    </div>
    <section class="section one">
      <div class="one--content">
        <img src="views/assets/image/logo2.1.png" alt="logo">
        <h2>Bienvenido a nuestro grupo de</h2>
        <h1>investigadores.</h1>
        <button type="button" name="button" id="loginBtn">iniciar sesion</button>
      </div>
    </section>
    <script src="views/assets/lib/jquery.js"></script>
    <script src="views/assets/js/main.js"></script>
    <script type="text/javascript">
    if (document.getElementById('loginModal')) {
      var modal = document.getElementById('loginModal');
      var openModal = document.getElementById('loginBtn');
      var closeModal = document.getElementById('closeModal');
      openModal.onclick = function() {
        modal.style.display = "flex";
      }
      closeModal.onclick = function() {
        modal.style.display = "none";
      }

    }
    </script>
  </body>
</html>
