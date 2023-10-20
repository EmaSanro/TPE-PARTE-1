<?php
/* Smarty version 4.2.1, created on 2023-10-20 23:09:42
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532ec96023e56_63896477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd269150db331e09d93698fdb8ea8b97a3f92bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\home.tpl',
      1 => 1697836147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532ec96023e56_63896477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home Asesinatos"), 0, false);
?>
<h1 class="title">Home Registro Asesinatos</h1>
<div class="listados">
    <a href="listaAsesinos">Listar Asesinos</a>
    <a href="listaVictimas">Listar Victimas</a>
</div>
<div class="container-form">
    <h2>Iniciar Sesion</h2>
    <form action="iniciar" method="post">
        <label for="username">Usuario:</label>
            <input type="text" name="username" placeholder="Nombre de usuario....">
        <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Contraseña....">
        <button type="submit">Iniciar Sesion</button>
    </form>
</div><?php }
}
