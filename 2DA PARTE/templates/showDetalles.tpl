{include file="templates/header.tpl" title="Detalles Victima"}
<h1 class="title">Detalles</h1>
<ul class="lista">
    <li>Nombre: {$victima->Nombre}</li>
    <li>Apellido: {$victima->Apellido}</li>
    <li>Edad: {$victima->Edad}</li>
    <li>Genero: {$victima->Genero}</li>
    <li>Asesinado por: {$asesino->Nombre}</li>
</ul>

