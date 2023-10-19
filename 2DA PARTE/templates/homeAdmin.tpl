<a href="listaVictimas">Listar Victimas</a>
<a href="listaAsesinos">Listar Asesinos</a>
<h2>Agregar Victimas</h2>
<form action="agregar/victimas" method="post">
    <label for="Nombre">Nombre:</label>
        <input type="text" name="nombre">
    <label for="Apellido">Apellido:</label>
        <input type="text" name="apellido">
    <label for="Edad">Edad:</label>
        <input type="number" name="edad">
    <label for="Genero">Genero</label>
    <select name="genero">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
    <select name="asesino">
    {foreach from=$asesinos item=$asesino}
        <option value='{$asesino->id}'>{$asesino->Nombre}</option>
    {/foreach}
    </select>
    <button type="submit">Agregar</button>
</form>
<h2>Agregar Asesinos</h2>
<form action="agregar/asesinos" method="post">
    <label for="Nombre">Nombre:</label>
        <input type="text" name="nombre">
    <label for="Apellido">Apellido:</label>
        <input type="text" name="apellido">
    <label for="Edad">Edad:</label>
        <input type="number" name="edad">
    <label for="Genero">Genero</label>
    <select name="genero">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
    <label for="Peso">Peso:</label>
        <input type="text" name="peso">
    <label for="Altura">Altura:</label>
        <input type="text" name="altura">
    <button type="submit">Agregar</button>
</form>
<a href="cerrar">Cerrar Sesion</a>