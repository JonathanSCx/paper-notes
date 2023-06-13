<h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Detalle del pedido</h1>

<?php if (isset($pedido)): ?>
    <?php if(isset($_SESSION['admin'])): ?>
    <h3>Cambiar estado del pedido:</h3>
    <form action="<?=base_url?>pedido/status" method="POST">
        <input type="hidden" value="<?=$pedido->id?>" name="pedido_id"/>
        <select name="estado">
            <option value="confirm" <?=$pedido->estado == "confirm" ? 'selected': '';?>>Pendiente</option>
            <option value="preparation" <?=$pedido->estado == "preparation" ? 'selected': '';?>>En preparación para el envio</option>
            <option value="ready" <?=$pedido->estado == "ready" ? 'selected': '';?>>Preparado para el envio</option>
            <option value="sended" <?=$pedido->estado == "sended" ? 'selected': '';?>>Enviado</option>
        </select>
        <input type="submit" value="Cambiar estado" style="margin-left: 0px"/>
    </form>
    </br>
    <?php endif; ?>

    <h3>Dirección de envio</h3>
    Provincia: <?= $pedido->provincia ?> </br>
    Ciudad: <?= $pedido->localidad ?> </br>
    Dirección: <?= $pedido->direccion ?> </br>

    </br>
    <h3>Datos del pedido:</h3>
    Número del pedido: <b><?= $pedido->id ?></b></br>
    Total a pagar: <b>$<?= $pedido->coste ?> MXN</b></br>
    Estado del pedido: <b><?= Utils::showStatus($pedido->estado)?></b></br>
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