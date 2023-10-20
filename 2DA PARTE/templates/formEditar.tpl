{include file="templates/header.tpl" title="Formulario de Edicion"}
<h1 class="title">Formulario de Edicion</h1>
<div class="container-form">
    <h2>Editar</h2>
    <form action='../../actualizar/{$tabla}/{$id}' method='post'> 
        <label for='Nombre'>Nombre:</label>
            <input type='text' name='nombre'>
        <label for='Apellido'>Apellido:</label>
            <input type='text' name='apellido'>
        <label for='Edad'>Edad:</label>
            <input type='number' name='edad'>
        <label for='Genero'>Genero</label>
        <select name='genero'>
            <option value='Masculino'>Masculino</option>
            <option value='Femenino'>Femenino</option>
        </select>
        {if $tabla == 'victimas'}
            <label>Asesinado Por:</label>
            <select name='asesino'>";
        {foreach from=$asesinos item=$asesino}
            <option value='{$asesino->id}'>{$asesino->Nombre}</option>
        {/foreach}
            </select>
        {else if $tabla == 'asesinos'}
            <label for='Peso'>Peso:</label>
                <input type='text' name='peso'>
            <label for='Altura'>Altura:</label>
                <input type='text' name='altura'>
        {/if}
        <button type='submit'>Editar</button>
    </form>
</div>
