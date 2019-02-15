<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewName.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6429140a3ee5_19832725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd69655103bc5ff9bf1903f66846d960c18bd56' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewName.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6429140a3ee5_19832725 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value) {?><div class="rowName"><?php ob_start();
echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('FIELD_NAME', ($_prefixVariable2).($_smarty_tpl->tpl_vars['ROW_NO']->value));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode(array('mandatory'=>true))));
$_smarty_tpl->_assignInScope('CRMEntity', CRMEntity::getInstance($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value));
?><div class="input-group input-group-sm"><input name="popupReferenceModule" type="hidden" data-multi-reference="1" data-field="<?php echo $_smarty_tpl->tpl_vars['CRMEntity']->value->table_index;?>
" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value;?>
"/><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
"class="sourceField" data-type="inventory" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
'data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?> /><?php $_smarty_tpl->_assignInScope('displayId', $_smarty_tpl->tpl_vars['ITEM_VALUE']->value);
?><div class="input-group-prepend"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?><span class="input-group-text clearReferenceSelection u-cursor-pointer js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class="fas fa-times-circle"></span></span><?php }?></div><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" type="text"title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
"class="marginLeftZero form-control autoComplete recordLabel"<?php if (!empty($_smarty_tpl->tpl_vars['ITEM_VALUE']->value)) {?>readonly="true"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
"data-validation-engine="validate[<?php if (!$_smarty_tpl->tpl_vars['IS_OPTIONAL_ITEMS']->value && $_smarty_tpl->tpl_vars['FIELD']->value->isMandatory()) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?>placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php }
if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?><span class="input-group-text relatedPopup u-cursor-pointer js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fas fa-search"></span></span><?php }
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value));
if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value->isQuickCreateSupported() && $_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?><span class="input-group-text u-cursor-pointer createReferenceRecord js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fas fa-plus"></span></span><?php }?></div></div><div class="subProductsContainer"><ul class="float-left"></ul></div></div><?php }
}
}
