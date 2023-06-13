<?php if (isset($categoria)): ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;"><?= $categoria->nombre ?></h1>
        <?php if ($productos->num_rows == 0): ?>
            <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">No hay productos para mostrar</h1>

        <?php else: ?>
            <?php while ($pro = $productos->fetch_object()): ?>

                <div class="product">
                    <a href="<?= base_url ?>producto/ver&id=<?= $pro->id ?>" class="pro">
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
    <?php endif; ?>

<?php else: ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">La categoria no existe</h1>
<?php endif; ?>
