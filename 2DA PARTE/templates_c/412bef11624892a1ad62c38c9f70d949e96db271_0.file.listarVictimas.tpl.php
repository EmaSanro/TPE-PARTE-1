<?php
/* Smarty version 4.2.1, created on 2023-10-21 00:18:34
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\listarVictimas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532fcba9f6f58_88992692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '412bef11624892a1ad62c38c9f70d949e96db271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\listarVictimas.tpl',
      1 => 1697840312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532fcba9f6f58_88992692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Listado de Victimas"), 0, false);
?>
<h1 class="title">Listado de Victimas</h1>
<?php if ($_smarty_tpl->tpl_vars['sesion']->value) {?>
    <ul class="lista">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['victimas']->value, 'victima');
$_smarty_tpl->tpl_vars['victima']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['victima']->value) {
$_smarty_tpl->tpl_vars['victima']->do_else = false;
?>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Nombre;?>
 <a href='details/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'> Ver Detalles</a> <a href='eliminar/victimas/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'> Eliminar</a> <a href='editar/victimas/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'> Editar</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <ul class="lista">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['victimas']->value, 'victima');
$_smarty_tpl->tpl_vars['victima']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['victima']->value) {
$_smarty_tpl->tpl_vars['victima']->do_else = false;
?>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Nombre;?>
 <a href='details/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'>Ver Detalles</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
