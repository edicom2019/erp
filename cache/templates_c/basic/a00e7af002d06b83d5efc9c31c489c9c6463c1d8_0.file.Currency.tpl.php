<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Edit\Field\Currency.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc43553c41_98450940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00e7af002d06b83d5efc9c31c489c9c6463c1d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Currency.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc43553c41_98450940 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Edit-Field-Currency"><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('SYMBOL_PLACEMENT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->currency_symbol_placement);
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '71') {?><div class="input-group"><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {?><span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span></span><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="currencyField form-control <?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?> textAlignRight <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' data-number-of-decimal-places='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('no_of_currency_decimals');?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php } else { ?> data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php }?>/><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?><span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span></span><?php }?></div><?php } elseif (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '72') && ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'unit_price')) {?><div class="input-group"><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {?><span class="input-group-append row"><span class="input-group-text js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_SYMBOL']->value;?>
</span></span><?php }
$_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);
?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
-editview-fieldname-<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="col-md-12 unitPrice currencyField form-control <?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?> textAlignRight <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'  value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' data-number-of-decimal-places='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('no_of_currency_decimals');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php } else { ?> data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php }?>/><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?><span class="input-group-append row"><span class="input-group-text js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_SYMBOL']->value;?>
</span></span><?php }?></div><input type="hidden" name="base_currency" value="<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_NAME']->value;?>
"><input type="hidden" name="cur_<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_ID']->value;?>
_check" value="on"><input type="hidden" id="requstedUnitPrice" name="<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_NAME']->value;?>
" value=""><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'Edit') {?><a id="moreCurrencies" class="span u-cursor-pointer"><?php echo \App\Language::translate('LBL_MORE_CURRENCIES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
>></a><span id="moreCurrenciesContainer" class="d-none"></span><?php }
} else { ?><div class="input-group"><div class="row"><span class="col-md-1 input-group-append"><span class="input-group-text row js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span></span><?php $_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);
?><span class="col-md-7"><input type="text" class="row-fluid currencyField form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> /></span></div></div><?php }?></div>
<?php }
}
