<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:20:35
  from 'C:\xampp\htdocs\tpeparte2\templates\listarVictimas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65315753238ad8_64845057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e59bd19af7580d81f3f60fe1cda2266260b775b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\listarVictimas.tpl',
      1 => 1697731146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_65315753238ad8_64845057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Victimas",'titulo'=>"Listado De Victimas: "), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['sesion']->value) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['victimas']->value, 'victima');
$_smarty_tpl->tpl_vars['victima']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['victima']->value) {
$_smarty_tpl->tpl_vars['victima']->do_else = false;
?>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Nombre;?>
 <a href='details/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'>Ver Detalles</a></li> <a href='eliminar/victimas/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'> Eliminar</a> <a href='editar/victimas/<?php echo $_smarty_tpl->tpl_vars['victima']->value->id;?>
'> Editar</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <ul>
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
