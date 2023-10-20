<?php
/* Smarty version 4.2.1, created on 2023-10-21 00:09:23
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\victimaPorAsesino.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532fa93dac112_38845698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffc8216117b41006935d14f92384f87aca13492' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\victimaPorAsesino.tpl',
      1 => 1697837172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532fa93dac112_38845698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Victimas Por Asesino"), 0, false);
?>
<h1 class="title">Victimas Por Asesino</h1>
<ul class="lista">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['victimas']->value, 'victima');
$_smarty_tpl->tpl_vars['victima']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['victima']->value) {
$_smarty_tpl->tpl_vars['victima']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['victima']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['victima']->value->Apellido;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
