<h1>Los más destacados</h1>

<?php while ($pro = $productos->fetch_object()): ?>

    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$pro->id?>" class="pro">
            <?php if ($pro->image != NULL): ?>
                <img src="<?= base_url ?>/uploads/images/<?= $pro->image ?>"  alt="Special Edition"/>
            <?php else: ?>
                <img src="<?= base_url ?>assets/img/logo.png"  alt="Special Edition"/>
            <?php endif; ?> 
            <h2><?= $pro->nombre ?></h2>
        </a>
        <p>$<?= $pro->precio ?> MXN</p>
        <a href="<?=base_url?>carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
        </div>

<?php endwhile; ?>

<!-- PRUEBA
<div class="product">
    <img src="assets/img/logo.png"  alt="Special Edition"/>
    <h2>Camiseta Gamer Gear Special Edition</h2>
    <p>$500 MXN</p>
    <a href="#" class="button">Comprar</a>
</div>

<div class="product">
    <img src="assets/img/logo.png"  alt="Special Edition"/>
    <h2>Camiseta Gamer Gear Special Edition</h2>
    <p>$500 MXN</p>
    <a href="#" class="button">Comprar</a>
</div>
-->
