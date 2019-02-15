<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:00:48
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTUpdateRelatedFieldTask.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c64312061cef2_65397137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b41b06cdcaf2ab172ae3f1c799e7c52c6e84c6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTUpdateRelatedFieldTask.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64312061cef2_65397137 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="d-flex px-1 px-md-2"><strong class="align-self-center mr-2"><?php echo \App\Language::translate('LBL_SET_FIELD_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong><button type="button" class="btn btn-outline-dark" id="addFieldBtn"><?php echo \App\Language::translate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><br/><div class="row js-conditions-container no-gutters px-1" id="save_fieldvaluemapping" data-js="container"><?php $_smarty_tpl->_assignInScope('FIELD_VALUE_MAPPING', \App\Json::decode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping));
?><input type="hidden" id="fieldValueMapping" name="field_value_mapping" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping);?>
'/><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING']->value, 'FIELD_MAP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MAP']->value) {
?><div class="row no-gutters col-12 col-xl-6 js-conditions-row padding-bottom1per px-md-1" data-js="container | clone"><div class="col-md-5 mb-1 mb-md-0"><select name="fieldname" class="chzn-select" style="min-width: 250px" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFieldsByReference(), 'REFERENCE_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getReferenceList(), 'RELATION_MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
 - <?php echo \App\Language::translate('LBL_RELATIONSHIPS_BASED_ON_FIELDS');?>
"><?php $_smarty_tpl->_assignInScope('RELATION_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('VALUE', (((($_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->get('name')).('::')).($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value)).('::')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname'] == $_smarty_tpl->tpl_vars['VALUE']->value) {?> selected=""<?php }?>data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelations(), 'RELATION_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODEL']->value) {
$_smarty_tpl->_assignInScope('RELATION_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getRelationModuleName());
$_smarty_tpl->_assignInScope('RELATION_MODULE_MODEL', $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getRelationModuleModel());
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
 - <?php echo \App\Language::translate('LBL_RELATIONSHIPS_BASED_ON_MODULES');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname'] == (($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value).('::')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName())) {?>selected=""<?php }?>data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="fieldUiHolder col-10 col-md-5 px-md-2"><input type="text" class="getPopupUi form-control" readonly="" name="fieldValue" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['value'];?>
"/><input type="hidden" name="valuetype" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['valuetype'];?>
"/></div><div class="col-2"><button class="btn btn-danger float-right float-xl-left" type="button"><span class="alignMiddle deleteCondition fas fa-trash-alt"></span></button></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><br/><div class="row no-gutters col-12 col-xl-6 js-add-basic-field-container d-none padding-bottom1per px-md-2"><div class="col-md-5 mb-1 mb-md-0"><select name="fieldname" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="form-control"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFieldsByReference(), 'REFERENCE_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getReferenceList(), 'RELATION_MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
 - <?php echo \App\Language::translate('LBL_RELATIONSHIPS_BASED_ON_FIELDS');?>
"><?php $_smarty_tpl->_assignInScope('RELATION_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('VALUE', (((($_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->get('name')).('::')).($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value)).('::')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelations(), 'RELATION_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODEL']->value) {
$_smarty_tpl->_assignInScope('RELATION_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getRelationModuleName());
$_smarty_tpl->_assignInScope('RELATION_MODULE_MODEL', $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getRelationModuleModel());
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
 - <?php echo \App\Language::translate('LBL_RELATIONSHIPS_BASED_ON_MODULES');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="fieldUiHolder col-10 col-md-5 px-md-2"><input type="text" class="form-control" readonly="" name="fieldValue" value=""/><input type="hidden" name="valuetype" class="form-control" value="rawtext"/></div><div class="col-2"><button class="btn btn-danger float-right float-xl-left" type="button"><span class="alignMiddle deleteCondition fas fa-trash-alt"></span></button></div></div>
<?php }
}
