<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:20:21
  from 'C:\xampp\htdocs\tpeparte2\templates\homeAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65315745315f92_56063365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7434aa8e18d494b2028ef1264bf9fae9082e0bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\homeAdmin.tpl',
      1 => 1697731142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65315745315f92_56063365 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="listaVictimas">Listar Victimas</a>
<a href="listaAsesinos">Listar Asesinos</a>
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
<a href="cerrar">Cerrar Sesion</a><?php }
}
