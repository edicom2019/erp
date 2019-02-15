<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewTaxMode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d851619235_10593333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642124010020deccda1493b7612e4b20e78791b7' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/DetailViewTaxMode.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d851619235_10593333 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value),$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }
}
