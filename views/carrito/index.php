<h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Mi carrito de compras</h1>


<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
    <table>
        <tr>
            <th>IMAGEN</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>UNIDADES</th>
            <th>ELIMINAR</th>
        </tr>
        <?php
        foreach ($carrito as $indice => $elemento):
            $producto = $elemento['producto'];
            ?>
            <tr>
                <td>
                    <?php if ($producto->image != NULL): ?>
                        <img src="<?= base_url ?>/uploads/images/<?= $producto->image ?>"  alt="Special Edition" class="img_carrito"/>
                    <?php else: ?>
                        <img src="<?= base_url ?>assets/img/logo.png"  alt="Special Edition" class="img_carrito"/>
                    <?php endif; ?> 
                </td>
                <td>
                    <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>
                <td>
                    <?= $producto->precio ?>
                </td>
                <td>
                    <div class="carrito_unidades">
                        <a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button"><i class="fas fa-arrow-up"></i></a>
                        <p><?= $elemento['unidades'] ?></p>
                        <a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button"><i class="fas fa-arrow-down"></i></a>
                    </div>
                </td>
                <td>
                    <a href="<?= base_url ?>carrito/remove&index=<?= $indice ?>" class="button button-gestion button-eliminar"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </br>
    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-carrito button-eliminar">vaciar</a>
    </div>

    <?php $stats = Utils::stastCarrito() ?>
    <div class="total-carrito">
        <h2>Precio total: $<?= $stats['total'] ?></h2>

        <a href="<?= base_url ?>pedido/hacer" class="button button-carrito">Confirmar</a>
    </div>

<?php else: ?>
    <h2>El carrito está vacio</h2>
<?php endif; ?>