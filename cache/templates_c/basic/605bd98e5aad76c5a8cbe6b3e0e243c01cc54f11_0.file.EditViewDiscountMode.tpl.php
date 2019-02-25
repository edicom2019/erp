<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewDiscountMode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc436f8687_21180445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605bd98e5aad76c5a8cbe6b3e0e243c01cc54f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewDiscountMode.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc436f8687_21180445 (Smarty_Internal_Template $_smarty_tpl) {
?>

<select class="select2 discountMode" title="<?php echo \App\Language::translate('LBL_DISCOUNT_MODE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>><option value="0" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '0') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '1') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select>
<?php }
}
