<?php
/* Smarty version 4.2.1, created on 2023-10-21 00:30:08
  from 'C:\xampp\htdocs\TPE-WEB2\2DA PARTE\templates\formEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532ff70e431d3_70874977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab57b317f922f39c857881cd1d4134fc434383a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\2DA PARTE\\templates\\formEditar.tpl',
      1 => 1697841006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6532ff70e431d3_70874977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Formulario de Edicion"), 0, false);
?>
<h1 class="title">Formulario de Edicion</h1>
<div class="container-form">
    <h2>Editar</h2>
    <form action='../../actualizar/<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method='post'> 
        <label for='Nombre'>Nombre:</label>
            <input type='text' name='nombre'>
        <label for='Apellido'>Apellido:</label>
            <input type='text' name='apellido'>
        <label for='Edad'>Edad:</label>
            <input type='number' name='edad'>
        <label for='Genero'>Genero</label>
        <select name='genero'>
            <option value='Masculino'>Masculino</option>
            <option value='Femenino'>Femenino</option>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['tabla']->value == 'victimas') {?>
            <label>Asesinado Por:</label>
            <select name='asesino'>";
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
        <?php } elseif ($_smarty_tpl->tpl_vars['tabla']->value == 'asesinos') {?>
            <label for='Peso'>Peso:</label>
                <input type='text' name='peso'>
            <label for='Altura'>Altura:</label>
                <input type='text' name='altura'>
        <?php }?>
        <button type='submit'>Editar</button>
    </form>
</div>
<?php }
}
