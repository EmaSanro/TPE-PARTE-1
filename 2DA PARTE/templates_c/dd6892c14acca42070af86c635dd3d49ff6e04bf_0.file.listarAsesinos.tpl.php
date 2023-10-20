<?php
/* Smarty version 4.2.1, created on 2023-10-20 23:26:22
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\listarAsesinos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532f07e3fb654_43605818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6892c14acca42070af86c635dd3d49ff6e04bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\listarAsesinos.tpl',
      1 => 1697837176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532f07e3fb654_43605818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Listado de Asesinos"), 0, false);
?>
<h1 class="title">Listado de Asesinos</h1>
<ul class="lista">
    <?php if ($_smarty_tpl->tpl_vars['sesion']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesinos']->value, 'asesino');
$_smarty_tpl->tpl_vars['asesino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asesino']->value) {
$_smarty_tpl->tpl_vars['asesino']->do_else = false;
?>
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['asesino']->value->Apellido;?>
 <a href='victimasPorAsesino/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'>Ver Victimas</a> <a href='eliminar/asesinos/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'> Eliminar</a> <a href='editar/asesinos/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'> Editar</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesinos']->value, 'asesino');
$_smarty_tpl->tpl_vars['asesino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asesino']->value) {
$_smarty_tpl->tpl_vars['asesino']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['asesino']->value->Apellido;?>
 <a href='victimasPorAsesino/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'>Ver Victimas</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul><?php }
}
