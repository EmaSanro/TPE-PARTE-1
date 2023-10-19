{include file="templates/header.tpl" titulo="Listado de Asesinos:" title="Asesinos"}

{if $sesion}
    <ul>
    {foreach from=$asesinos item=$asesino}
        <li>Nombre: {$asesino->Nombre} <a href='victimasPorAsesino/{$asesino->id}'>Ver Victimas</a> <a href='eliminar/asesinos/{$asesino->id}'> Eliminar</a> <a href='editar/asesinos/{$asesino->id}'> Editar</a></li>
    {/foreach}
    </ul>
{else}
    <ul>
        {foreach from=$asesinos item=$asesino}
                <li>{$asesino->Nombre} <a href='victimasPorAsesino/{$asesino->id}'>Ver Victimas</a></li>
        {/foreach}
    </ul>
{/if}