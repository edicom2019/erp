<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewInteger.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642914123344_28939559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff988828a80a58fb83416bbc2e450e853bdaa40b' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewInteger.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642914123344_28939559 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'text');
if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'hidden');
?><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
Text integerText"><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
</span><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['INPUT_TYPE']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
 integerVal" data-validation-engine="validate[funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation],maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
]]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/>
<?php }
}
