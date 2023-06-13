<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Tu pedido ha sido confirmado</h1>
    <p>
        Tu pedido ha sido guardado con éxito, una vez que realices la transferencia bancaria a la cuenta: <b>2353465645645SDF</b> con el
        coste del pedido, será procesado y enviado.
    </p>
    </br>
    <?php if (isset($pedido)): ?>
        <h3>Datos del pedido</h3>

        Número del pedido: <b><?= $pedido->id ?></b></br>

        Total a pagar: <b>$<?= $pedido->coste ?> MXN</b></br>

        </br>
        <table>
            <th>PRODUCTO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>UNIDADES</th>
            <?php while ($producto = $productos->fetch_object()): ?>
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
                        <?= $producto->unidades ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

    <?php endif; ?>

<?php elseif ((isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete')): ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Tu pedido NO pudo completarse</h1>
    <p>
        Tu pedido no se ha podido realizar con éxito, por favor intenta otra vez
    </p>
<?php endif; ?>
