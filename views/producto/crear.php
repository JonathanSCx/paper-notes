<?php if (isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Editar producto: <?= $pro->nombre ?> <i class="fas fa-tshirt"></i></h1>
    <?php $url_action = base_url . "producto/save&id=".$pro->id; ?>

<?php else: ?>
    <h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Crear nuevos productos</h1>
    <?php $url_action = base_url . "producto/save"; ?>
<?php endif; ?>

<form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion"><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

    <label for="precio">Precio</label>
    <input type="text" name="precio" value="<?= isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

    <label for="stock">Stock</label>
    <input type="number" name="stock" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

    <label for="categoria">Categoria</label>
    <?php $categorias = Utils::showCategorias(); ?>
    <select name="categoria">
        <option value="">-¡CATEGORIAS-</option>
        <?php while ($cat = $categorias->fetch_object()): ?>
            <option value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
                <?= $cat->nombre ?>
            </option>
        <?php endwhile; ?>
    </select>

    <label for="image">Imagen</label>
    <?php if (isset($pro) && is_object($pro) && !empty($pro->image)): ?>
    <img src="<?=base_url?>/uploads/images/<?=$pro->image?>" class="images"/>
    <?php endif; ?>
    <input type="file" name="image" style="padding-left: 315px;"/>

    <input type="submit" value="Guardad producto" style="margin-left: 0px; width: 100%"/>

</form>