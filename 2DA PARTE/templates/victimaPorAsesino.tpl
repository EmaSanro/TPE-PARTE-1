{include file="templates/header.tpl" title="Victimas Por Asesino" titulo="Victimas:"}
<ul>
{foreach from=$victimas  item=$victima}
    <li>{$victima->Nombre} {$victima->Apellido}</li>
{/foreach}
</ul>