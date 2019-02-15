<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fe35ed9_97416218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2368840837cfc5a67584cc2ab47aec2e55c2454' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fe35ed9_97416218 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Detail-Field-Base u-paragraph-m-0">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div><?php }
}
