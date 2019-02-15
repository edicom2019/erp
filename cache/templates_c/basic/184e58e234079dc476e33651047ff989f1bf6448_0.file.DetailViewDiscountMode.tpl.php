<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewDiscountMode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8516142f9_45750518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184e58e234079dc476e33651047ff989f1bf6448' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewDiscountMode.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8516142f9_45750518 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value),$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }
}
