<!DOCTYPE HTML>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="favicon/x-icon" href="<?= base_url ?>assets/img/icons.png?v=<?php echo time(); ?>" />
  <title>Paper & Notes</title>
  <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css?v=<?php echo time(); ?>" />
</head>

<body>
  <div id="container">
    <!-- HEADER -->
    <header id="header">
      <div id="logo">
        <img src="<?= base_url ?>assets/img/paper.png" alt="PaperLogo" />
        <a href="./../index.php">
          Paper & Notes
        </a>
        <i class="icon fab fa-codepen"></i>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- MENÚ -->
    <?php $categorias = Utils::showCategorias(); ?>
    <nav id="menu" style="overflow: hidden;">
      <ul>
        <li>
          <a href="<?= base_url ?>" style="padding: 0px 10px 0px 10px; font-size: 20px">Inicio</a>
        </li>
        <?php while ($cat = $categorias->fetch_object()): ?>
          <li>
            <a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"
              style="padding: 0px 10px 0px 10px; font-size: 20px"><?= $cat->nombre ?></a>
          </li>
        <?php endwhile; ?>

      </ul>
    </nav>
    <div class="clearfix"></div>
    <!-- MENÚ END -->

    <div id="content">