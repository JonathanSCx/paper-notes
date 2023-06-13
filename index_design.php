<!DOCTYPE HTML>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="favicon/x-icon" href="assets/img/icons.png?v=<?php echo time(); ?>" />
  <title>Gamer Gear</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <div id="container">
    <!-- HEADER -->
    <header id="header">
      <div id="logo">
        <img src="assets/img/gamer.png" alt="GamerGearLogo" />
        <a href="index.php">
          Gamer Gear Store
        </a>
        <i class="icon fab fa-xbox"></i>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- MENÚ -->
    <nav id="menu">
      <ul>
        <li>
          <a href="#">Inicio</a>
        </li>
        <li>
          <a href="#">Categoria 1</a>
        </li>
        <li>
          <a href="#">Categoria 2</a>
        </li>
        <li>
          <a href="#">Categoria 3</a>
        </li>
        <li>
          <a href="#">Categoria 4</a>
        </li>
        <li>
          <a href="#">Categoria 5</a>
        </li>
      </ul>
    </nav>
    <div class="clearfix"></div>
    <!-- MENÚ END -->

    <div id="content">
      <!-- ASIDE -->
      <aside id="aside">
        <div id="login" class="block_aside">
          <h3>Login</h3>
          <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Password</label>
            <input type="password" name="password" />

            <input type="submit" value="Enviar" />
          </form>

          <ul>
            <li><i class="form-icon fas fa-user"></i><a href="#"> Mis pedidos</a></li>
            <li><i class="form-icon fas fa-key"></i><a href="#">Gestionar pedidos</a></li>
            <li><i class="form-icon fas fa-user-lock"></i><a href="#">Gestionar categorias</a></li>
          </ul>
        </div>
      </aside>
      <!-- ASIDE END -->

      <!-- CONTENT -->

      <div id="central">
        <h1>Los más destacados</h1>
        <div class="product">
          <img src="assets/img/logo.png" alt="Special Edition" />
          <h2>Camiseta Gamer Gear Special Edition</h2>
          <p>$500 MXN</p>
          <a href="#" class="button">Comprar</a>
        </div>

        <div class="product">
          <img src="assets/img/logo.png" alt="Special Edition" />
          <h2>Camiseta Gamer Gear Special Edition</h2>
          <p>$500 MXN</p>
          <a href="#" class="button">Comprar</a>
        </div>

        <div class="product">
          <img src="assets/img/logo.png" alt="Special Edition" />
          <h2>Camiseta Gamer Gear Special Edition</h2>
          <p>$500 MXN</p>
          <a href="#" class="button">Comprar</a>
        </div>
      </div>

    </div>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <footer id="footer">
      <div id="design">
        <h5>&copy;Jonathan Salazar -
          <?= date('Y') ?>
        </h5>
      </div>
      <div id="social">
        <div class="socialmedia facebook">
          <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
          <p class="overlay">
            Facebook
          </p>
        </div>
        <div class="socialmedia instagram">
          <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
          <p class="overlay">
            Instagram
          </p>
        </div>
        <div class="socialmedia email">
          <a href="#" class="icon"><i class="far fa-envelope"></i></a>
          <p class="overlay">
            Email
          </p>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>