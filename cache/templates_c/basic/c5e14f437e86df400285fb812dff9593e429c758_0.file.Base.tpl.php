<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:35
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Detail\Field\Base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbc3ab5502_79328951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e14f437e86df400285fb812dff9593e429c758' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Base.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbc3ab5502_79328951 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Detail-Field-Base u-paragraph-m-0">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div><?php }
}
