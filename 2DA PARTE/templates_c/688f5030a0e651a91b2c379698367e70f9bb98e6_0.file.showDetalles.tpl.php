<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:23:30
  from 'C:\xampp\htdocs\tpeparte2\templates\showDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65315802321ed4_52706427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '688f5030a0e651a91b2c379698367e70f9bb98e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\showDetalles.tpl',
      1 => 1697731150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65315802321ed4_52706427 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Nombre;?>
</li>
    <li>Apellido: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Apellido;?>
</li>
    <li>Edad: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Edad;?>
</li>
    <li>Genero: <?php echo $_smarty_tpl->tpl_vars['victima']->value->Genero;?>
</li>
    <li>Asesinado por: <?php echo $_smarty_tpl->tpl_vars['asesino']->value->Nombre;?>
</li>
</ul>

<?php }
}
