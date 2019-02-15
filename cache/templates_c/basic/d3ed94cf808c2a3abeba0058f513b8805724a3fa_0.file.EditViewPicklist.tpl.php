<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewPicklist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6429141346d1_38555869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ed94cf808c2a3abeba0058f513b8805724a3fa' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewPicklist.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6429141346d1_38555869 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'text');
if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'hidden');
?><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
</span><?php }?><select class="form-control selectInv <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD']->value->getPicklistValues(), 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == $_smarty_tpl->tpl_vars['VALUE']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select>
<?php }
}
