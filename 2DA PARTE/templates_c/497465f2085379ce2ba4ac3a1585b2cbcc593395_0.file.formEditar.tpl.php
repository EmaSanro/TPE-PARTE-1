<?php
/* Smarty version 4.2.1, created on 2023-10-19 18:23:32
  from 'C:\xampp\htdocs\tpeparte2\templates\formEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653158042d34a7_61374937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '497465f2085379ce2ba4ac3a1585b2cbcc593395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeparte2\\templates\\formEditar.tpl',
      1 => 1697730761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653158042d34a7_61374937 (Smarty_Internal_Template $_smarty_tpl) {
?><form action='../../actualizar/<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>
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
<?php }
}
