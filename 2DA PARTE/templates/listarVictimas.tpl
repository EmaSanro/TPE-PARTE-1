{include file="templates/header.tpl" title="Victimas" titulo="Listado De Victimas: "}

{if $sesion}
    <ul>
    {foreach from=$victimas item=$victima}
        <li>Nombre: {$victima->Nombre} <a href='details/{$victima->id}'>Ver Detalles</a></li> <a href='eliminar/victimas/{$victima->id}'> Eliminar</a> <a href='editar/victimas/{$victima->id}'> Editar</a></li>
    {/foreach}
    </ul>
{else}
    <ul>
    {foreach from=$victimas item=$victima}
        <li>Nombre: {$victima->Nombre}<a href='details/{$victima->id}'>Ver Detalles</a></li>
    {/foreach}
    </ul>
{/if}