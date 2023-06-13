<?php if (isset($gestion)): ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Gestionar pedidos</h1>
<?php else: ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Mis pedidos</h1>
<?php endif; ?>

<table>
    <tr>
        <th>NÚMERO DEL PEDIDO</th>
        <th>COSTO</th>
        <th>FECHA</th
        <th>ESTADO</th>
    </tr>
    <?php
    while ($ped = $pedidos->fetch_object()):
        ?>
        <tr>
            <td>
                <a href="<?= base_url ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
            </td>
            <td>
                $<?= $ped->coste ?> MXN
            </td>
            <td>
                <?= $ped->fecha ?>
            </td>
            <td>
                <?= Utils::showStatus($ped->estado) ?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>