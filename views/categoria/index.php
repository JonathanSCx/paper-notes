<h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button" id="category">
    <i class="fas fa-magic"></i> Crear categoria
</a>

<table >
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
    </tr>
<?php while($cat = $categorias->fetch_object()): ?>
    <tr>
        <td><?=$cat->id;?></td>
        <td><?=$cat->nombre;?></td>
    </tr>
<?php endwhile; ?>
</table>
