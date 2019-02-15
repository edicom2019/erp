<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewBase.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d851624d05_38884595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f605cd063165384bf30bce1685140edca159f4f6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewBase.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d851624d05_38884595 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('columnname') === 'qty' && $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['unit'] === 'pack' && $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['qtyparam']) {?>(<?php echo \App\Language::translate('pcs','Products');?>
)<?php }?> <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>

<?php }
}
