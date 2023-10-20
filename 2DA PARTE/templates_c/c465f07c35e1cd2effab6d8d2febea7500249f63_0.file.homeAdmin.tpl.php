<?php
/* Smarty version 4.2.1, created on 2023-10-21 00:13:06
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\homeAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532fb72ce2769_86461568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c465f07c35e1cd2effab6d8d2febea7500249f63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\homeAdmin.tpl',
      1 => 1697839984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532fb72ce2769_86461568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home Admin"), 0, false);
?>
<h1 class="title">Home Admin</h1>
<div class="listados">
    <a href="listaVictimas">Listar Victimas</a>
    <a href="listaAsesinos">Listar Asesinos</a>
</div>
<div class="container">
    <div class="container-form-admin">
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
            <label for="asesino">Asesinado Por:</label>
            <select name="asesino">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesinos']->value, 'asesino');
$_smarty_tpl->tpl_vars['asesino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asesino']->value) {
$_smarty_tpl->tpl_vars['asesino']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit">Agregar</button>
        </form>
    </div>
    <div class="container-form-admin">
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
    </div>
</div>
<a href="cerrar">Cerrar Sesion</a><?php }
}
