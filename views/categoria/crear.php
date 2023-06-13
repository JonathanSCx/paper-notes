<h1 style="text-align: center; margin-right: 30px; font-size: 30px; font-weight: bold;">Crear nueva categoria</h1>

<form action="<?=base_url?>categoria/save" method="POST">
    <label for="nombre" style="font-size: 20px; margin-bottom: 10px">Nombre</label>
    <input type="text" name="nombre" required />
    
    <input type="submit" value="Crear" style="margin-left: 315px"/>
</form>