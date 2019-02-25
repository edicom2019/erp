<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewTaxMode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc4372fa68_70764423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88017e1a0238990e8ff9ee68c759626157b9f97a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewTaxMode.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc4372fa68_70764423 (Smarty_Internal_Template $_smarty_tpl) {
?>

<select class="select2 taxMode" title="<?php echo \App\Language::translate('LBL_TAX_MODE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>><option value="0" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '0') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '1') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select>
<?php }
}
