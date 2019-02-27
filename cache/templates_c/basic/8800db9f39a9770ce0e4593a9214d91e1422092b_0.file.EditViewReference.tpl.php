<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewReference.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc438c92c1_33380726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8800db9f39a9770ce0e4593a9214d91e1422092b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewReference.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc438c92c1_33380726 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('REFERENCE_LIST', $_smarty_tpl->tpl_vars['FIELD']->value->getReferenceModules());
ob_start();
echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('FIELD_NAME', ($_prefixVariable3).($_smarty_tpl->tpl_vars['ROW_NO']->value));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode(array('mandatory'=>true))));
$_smarty_tpl->_assignInScope('REFERENCE_LIST_COUNT', count($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value));
?><div class="input-group input-group-sm referenceGroup"><?php if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value == 1) {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_NAME', reset($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value));
?><input name="popupReferenceModule" type="hidden" data-multi-reference="0" title="<?php echo reset($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value);?>
"value="<?php echo reset($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value);?>
"/><?php }
if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value > 1) {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_NAME', $_smarty_tpl->tpl_vars['FIELD']->value->getReferenceModule($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
if (in_array($_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['REFERENCE_LIST']->value)) {?><input name="popupReferenceModule" type="hidden" data-multi-reference="1" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value;?>
"/><?php } else {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_NAME', $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0]);
?><input name="popupReferenceModule" type="hidden" data-multi-reference="1" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value;?>
"/><?php }
}
if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value > 1) {?><div class="input-group-prepend referenceModulesListGroup"><select class="referenceModulesList" title="<?php echo \App\Language::translate('LBL_RELATED_MODULE_TYPE');?>
"required="required"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value, 'REFERENCE', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['REFERENCE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE']->value;?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE']->value,$_smarty_tpl->tpl_vars['REFERENCE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['REFERENCE']->value == $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE']->value,$_smarty_tpl->tpl_vars['REFERENCE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
" class="sourceField"data-type="inventory" data-displayvalue="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?>
"data-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?> /><?php $_smarty_tpl->_assignInScope('displayId', $_smarty_tpl->tpl_vars['ITEM_VALUE']->value);
?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" type="text"title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?>
"class="form-control autoComplete" <?php if (!empty($_smarty_tpl->tpl_vars['ITEM_VALUE']->value)) {?>readonly="true"<?php }?>value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?>
"data-validation-engine="validate[<?php if (!$_smarty_tpl->tpl_vars['IS_OPTIONAL_ITEMS']->value && $_smarty_tpl->tpl_vars['FIELD']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?>placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php }
if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><div class="input-group-append u-cursor-pointer"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?><button class="btn btn-light clearReferenceSelection" type="button"><span class="fas fa-times-circle" title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><button class="btn btn-light relatedPopup" type="button"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><?php $_smarty_tpl->_assignInScope('REFERENCE_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value));
?><!-- Show the add button only if it is edit view  --><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'Edit' && $_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value->isQuickCreateSupported()) {?><button class="btn btn-light createReferenceRecord" type="button"><span class="fas fa-plus" title="<?php echo \App\Language::translate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><?php }
}?></div></div>
<?php }
}
