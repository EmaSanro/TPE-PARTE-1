<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:20:04
  from 'C:\xampp\htdocs\tpeparte2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65315734439c76_89727429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe03c85ed3edf80f919028bd328cf1d89e8d906' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\home.tpl',
      1 => 1697731145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65315734439c76_89727429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="listaAsesinos">listar asesinos</a>
        <a href="listaVictimas">listar victimas</a>
            
        <form action="iniciar" method="post">
            <label for="username">Usuario:</label>
                <input type="text" name="username" placeholder="Nombre de usuario....">
            <label for="password">Contraseña:</label>
                <input type="password" name="password" placeholder="Contraseña....">
            <button type="submit">Iniciar Sesion</button>
        </form>
    </body>
</html><?php }
}
