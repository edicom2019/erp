<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewName.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d851630ef6_96116377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29b2c710ba7a2b3bbde9e339ea2cedaaa3a2369' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewName.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d851630ef6_96116377 (Smarty_Internal_Template $_smarty_tpl) {
?>

<strong><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
</strong><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[2], 'FIELD2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD2']->value) {
if ($_smarty_tpl->tpl_vars['FIELD2']->value->getName() == 'Comment') {?><br /><?php echo $_smarty_tpl->tpl_vars['FIELD2']->value->getDisplayValue($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD2']->value->get('columnname')]);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
