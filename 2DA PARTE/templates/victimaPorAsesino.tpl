{include file="templates/header.tpl" title="Victimas Por Asesino"}
<h1 class="title">Victimas Por Asesino</h1>
<ul class="lista">
{foreach from=$victimas  item=$victima}
    <li>{$victima->Nombre} {$victima->Apellido}</li>
{/foreach}
</ul>