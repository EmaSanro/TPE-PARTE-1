{include file="templates/header.tpl" title="Listado de Asesinos"}
<h1 class="title">Listado de Asesinos</h1>
<ul class="lista">
    {if $sesion}
        {foreach from=$asesinos item=$asesino}
            <li>Nombre: {$asesino->Nombre} {$asesino->Apellido} <a href='victimasPorAsesino/{$asesino->id}'>Ver Victimas</a> <a href='eliminar/asesinos/{$asesino->id}'> Eliminar</a> <a href='editar/asesinos/{$asesino->id}'> Editar</a></li>
        {/foreach}
    {else}
        {foreach from=$asesinos item=$asesino}
                <li>{$asesino->Nombre} {$asesino->Apellido} <a href='victimasPorAsesino/{$asesino->id}'>Ver Victimas</a></li>
        {/foreach}
    {/if}
</ul>