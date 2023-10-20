{include file="templates/header.tpl" title= "Home Asesinatos"}
<h1 class="title">Home Registro Asesinatos</h1>
<div class="listados">
    <a href="listaAsesinos">Listar Asesinos</a>
    <a href="listaVictimas">Listar Victimas</a>
</div>
<div class="container-form">
    <h2>Iniciar Sesion</h2>
    <form action="iniciar" method="post">
        <label for="username">Usuario:</label>
            <input type="text" name="username" placeholder="Nombre de usuario....">
        <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Contraseña....">
        <button type="submit">Iniciar Sesion</button>
    </form>
</div>