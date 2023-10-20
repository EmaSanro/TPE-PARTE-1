{include file="templates/header.tpl" title="Listado de Victimas"}
<h1 class="title">Listado de Victimas</h1>
{if $sesion}
    <ul class="lista">
    {foreach from=$victimas item=$victima}
        <li>Nombre: {$victima->Nombre} <a href='details/{$victima->id}'> Ver Detalles</a> <a href='eliminar/victimas/{$victima->id}'> Eliminar</a> <a href='editar/victimas/{$victima->id}'> Editar</a></li>
    {/foreach}
    </ul>
{else}
    <ul class="lista">
    {foreach from=$victimas item=$victima}
        <li>Nombre: {$victima->Nombre} <a href='details/{$victima->id}'>Ver Detalles</a></li>
    {/foreach}
    </ul>
{/if}