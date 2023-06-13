<?php if (isset($_SESSION['identity'])): ?>

    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Hacer pedido</h1>
    
    <h3>Domicilio para el envio:</h3>
    <form action="<?=base_url.'pedido/add'?>" method="POST">
        <label for="provincia">Provicincia</label>
        <input type="text" name="provincia" required/> 
        
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required/> 
        
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required/> 
        
        <input type="submit" value="Confirmar" />
    </form>
    </br>
    <a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
<?php else: ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Necesitas estar registrado</h1>
    <p>Necesitas iniciar sesión para realizar el pedido</p>

<?php endif; ?>