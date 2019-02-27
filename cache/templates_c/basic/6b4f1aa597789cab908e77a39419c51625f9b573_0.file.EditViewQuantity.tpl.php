<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewQuantity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc43912e67_53251927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4f1aa597789cab908e77a39419c51625f9b573' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewQuantity.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc43912e67_53251927 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
if ($_smarty_tpl->tpl_vars['ITEM_DATA']->value['unit'] === 'pack' || $_smarty_tpl->tpl_vars['ITEM_DATA']->value['unit'] === 'pcs') {
$_smarty_tpl->_assignInScope('VALIDATION_ENGINE', 'validate[required,funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]');
} else {
$_smarty_tpl->_assignInScope('VALIDATION_ENGINE', 'validate[required,funcCall[Vtiger_NumberUserFormat_Validator_Js.invokeValidation]]');
}?><div class="input-group input-group-sm"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="text" class="qty smallInputBox form-control form-control-sm" data-maximumlength="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
" data-validation-engine="<?php echo $_smarty_tpl->tpl_vars['VALIDATION_ENGINE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><?php $_smarty_tpl->_assignInScope('QTY_PARAM', '');
if ($_smarty_tpl->tpl_vars['ITEM_DATA']->value['unit'] === 'pack' && ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value === 'Products' || $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value === 'Services') && $_smarty_tpl->tpl_vars['ITEM_DATA']->value['name']) {
$_smarty_tpl->_assignInScope('REFERENCE_RECORD', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name'],$_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value));
if ($_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value && $_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value->has('qty_per_unit')) {
$_smarty_tpl->_assignInScope('QTY_PARAM', $_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value->getDisplayValue('qty_per_unit'));
}
}?><div class="input-group-append"><span class="input-group-text js-popover-tooltip qtyParamInfo <?php if ($_smarty_tpl->tpl_vars['ITEM_DATA']->value['unit'] !== 'pack') {?>hidden<?php }?>" data-js="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['QTY_PARAM']->value;?>
" title="<?php echo \App\Language::translate('Qty/Unit','Products');?>
"><i class="fas fa-info-circle"></i></span></div></div>
<?php }
}
