<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:20:06
  from 'C:\xampp\htdocs\tpeparte2\templates\listarAsesinos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653157367d1dd2_56339721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab04a405e32acfeb0fca1e157eafdca3a21e4de4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\listarAsesinos.tpl',
      1 => 1697731154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_653157367d1dd2_56339721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Listado de Asesinos:",'title'=>"Asesinos"), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['sesion']->value) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesinos']->value, 'asesino');
$_smarty_tpl->tpl_vars['asesino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asesino']->value) {
$_smarty_tpl->tpl_vars['asesino']->do_else = false;
?>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
 <a href='victimasPorAsesino/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'>Ver Victimas</a> <a href='eliminar/asesinos/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'> Eliminar</a> <a href='editar/asesinos/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'> Editar</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesinos']->value, 'asesino');
$_smarty_tpl->tpl_vars['asesino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asesino']->value) {
$_smarty_tpl->tpl_vars['asesino']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
 <a href='victimasPorAsesino/<?php echo $_smarty_tpl->tpl_vars['asesino']->value->id;?>
'>Ver Victimas</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
