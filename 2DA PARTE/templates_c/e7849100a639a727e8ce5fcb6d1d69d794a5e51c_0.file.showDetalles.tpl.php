<?php
/* Smarty version 4.2.1, created on 2023-10-20 23:25:33
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\showDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532f04d28cc60_86715123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7849100a639a727e8ce5fcb6d1d69d794a5e51c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\showDetalles.tpl',
      1 => 1697837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532f04d28cc60_86715123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Detalles Victima"), 0, false);
?>
<h1 class="title">Detalles</h1>
<ul class="lista">
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
