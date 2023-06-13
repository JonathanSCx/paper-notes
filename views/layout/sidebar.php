<aside id="aside">
    
    <div id="carrito" class="block_aside">
        <h3>Mi carrito</h3>
        <ul>
            <?php $stats = Utils::stastCarrito()?>
            <li><i class="form-icon fas fa-clipboard-list"></i><a href="<?= base_url ?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
            <li><i class="form-icon fas fa-coins"></i><a href="<?= base_url ?>carrito/index">Total: $<?=$stats['total']?></a></li>
            <li><i class="form-icon fas fa-shopping-cart"></i><a href="<?= base_url ?>carrito/index">Ver el carrito</a></li>
        </ul>
    </div>
    
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identity'])): ?>
            <h3>Login</h3>
            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email"/>

                <label for="password">Password</label>
                <input type="password" name="password"/>
                <input type="submit" value="Enviar"/>
            </form>
        <?php else: ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <ul>
            <?php if (isset($_SESSION['admin'])): ?>
                <li><i class="form-icon fas fa-user-lock"></i><a href="<?= base_url ?>categoria/index">Gestionar categorias</a></li>
                <li><i class="form-icon fas fa-clipboard-list"></i><a href="<?= base_url ?>producto/gestion">Gestionar productos</a></li>
                <li><i class="form-icon fas fa-key"></i><a href="<?= base_url ?>pedido/gestion">Gestionar pedidos</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])): ?>
                <li><i class="form-icon fas fa-user"></i><a href="<?=base_url?>pedido/misPedidos">Mis pedidos</a></li>
                <li><i class="form-icon fas fa-sign-out-alt"></i><a href="<?= base_url ?>usuario/logout">Cerrar sesión</a></li>
            <?php else: ?>
                <li><i class="form-icon fas fa-user-plus"></i><a href="<?= base_url ?>usuario/register">Registrate aquí</a></li>
            <?php endif; ?>
        </ul>
    </div>
</aside>
<div id="central">
