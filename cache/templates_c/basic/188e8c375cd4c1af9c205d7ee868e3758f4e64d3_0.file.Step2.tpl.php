<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:33:10
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Step2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642aa6e553a5_69965575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '188e8c375cd4c1af9c205d7ee868e3758f4e64d3' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Step2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642aa6e553a5_69965575 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-MappedFields-Step2 mfTemplateContents"><form name="editMFTemplate" action="index.php" method="post" id="mf_step2" class="form-horizontal"><input type="hidden" name="module" value="MappedFields"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step3" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="2" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><?php $_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('params'));
?><div class="col-md-12 px-0"><div class="card"><div class="card-header"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,2);?>
: <?php echo \App\Language::translate('LBL_MAPPING_SETTINGS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="card-body"><div class="btn-toolbar"><button id="addMapping" class="btn btn-light addButton mb-2" type="button"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_CONDITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><div class="checkbox col-md-8 align-self-center"><label class="mr-1"><input class="mr-1" type="checkbox" name="autofill" <?php if ($_smarty_tpl->tpl_vars['PARAMS']->value['autofill']) {?> checked <?php }?>><?php echo \App\Language::translate('LBL_AUTOFILL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_AUTOFILL_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div><div class="contents" id="detailView"><div class="table-responsive"><table class="table table-bordered" id="mappingToGenerate"><tbody><tr class="listViewHeaders"><th class="sourceModuleName"><b><?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName()),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
</b></th><th><b><?php echo \App\Language::translate('LBL_FIELDS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></th><th class="targetModuleName"><b><?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName()),$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
</b></th><th class="defaultHeader"><b><?php echo \App\Language::translate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></th><th class="actionsHeader"><b><?php echo \App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></th></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getMapping(), 'MAPPING_ARRAY', false, 'MAPPING_ID', 'mappingLoop', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ID']->value => $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']++;
$_smarty_tpl->_assignInScope('SEQ', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null));
?><tr class="listViewEntries" sequence-number="<?php echo $_smarty_tpl->tpl_vars['SEQ']->value;?>
"><td><select class="sourceFields select2" name="mapping[<?php echo $_smarty_tpl->tpl_vars['SEQ']->value;?>
][source]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getFields(true), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType();?>
" data-mappingtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value == $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['source']->getId()) {?> selected <?php }?> label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
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
</select><input type="hidden" class="mappingType" name="mapping[<?php echo $_smarty_tpl->tpl_vars['SEQ']->value;?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['type'];?>
" /></td><td class="selectedFieldDataType text-center alignMiddle"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['source']->getFieldDataType(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><select class="targetFields select2" name="mapping[<?php echo $_smarty_tpl->tpl_vars['SEQ']->value;?>
][target]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getFields(), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['target']->getFieldDataType() == $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType()) {?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value == $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['target']->getId()) {?> selected <?php }?> label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></td><td class=""><?php if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['default']) {?><input type="hidden" class="form-control default" value="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['default'];?>
" /><?php }?></td><td class="textAlignCenter"><button title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button" class="btn btn-danger deleteMapping"><span class="fas fa-trash-alt"></span></button></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<tr class="d-none newMapping listViewEntries"><td><select class="sourceFields newSelect"><option data-type="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getFields(true), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType();?>
" data-type-name="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-mappingtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldType();?>
" label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
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
</select><input type="hidden" class="mappingType" value="" /></td><td class="selectedFieldDataType text-center alignMiddle"></td><td><select class="targetFields newSelect"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getFields(), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldDataType();?>
" label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['SEL_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
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
</select></td><td class=""></td><td class="textAlignCenter"><button title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button" class="btn btn-danger deleteMapping"><span class="fas fa-trash-alt"></span></button></td></tr></tbody></table></div></div></div><div class="card-footer clearfix"><div class="btn-toolbar float-right"><button class="btn btn-danger backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></div></form></div><div class="d-none" id="defaultValuesElementsContainer"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getFields(), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, '_FIELD_INFO', false, '_FIELD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_ID']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->_assignInScope('_FIELD_TYPE', $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldDataType());
$_smarty_tpl->_assignInScope('_FIELD_UITYPE', $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType());
if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'multipicklist') {?><select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" <?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'multipicklist') {?> multiple <?php }?> class="form-control" disabled><?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldName() != 'hdnTaxType' || $_smarty_tpl->tpl_vars['_FIELD_TYPE']->value != 'multipicklist') {?> <option value=" "><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option> <?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getPicklistValues(), 'PICKLIST_VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getName());?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><?php } elseif (in_array($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value,array('owner','sharedOwner')) || $_smarty_tpl->tpl_vars['_FIELD_UITYPE']->value == '52') {?><select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" class="" disabled <?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'sharedOwner') {?> multiple <?php }?>><?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value != 'sharedOwner') {?> <option value="0"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option> <?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS_LIST']->value, 'ITEM', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
if ($_smarty_tpl->tpl_vars['_FIELD_UITYPE']->value == '52') {?> continue <?php }?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEM']->value, '_NAME', false, '_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_ID']->value => $_smarty_tpl->tpl_vars['_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
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
</select><?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'date') {?><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" class="defaultInputTextContainer form-control col-md-2 dateField" value="" disabled/><?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'datetime') {?><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" class="defaultInputTextContainer form-control col-md-2" value="" data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" /><?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'boolean') {?><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" class="" disabled/><?php } elseif (!in_array($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value,array('sharedOwner','reference'))) {?><input type="input" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_ID']->value;?>
_defaultvalue" class="defaultInputTextContainer form-control" disabled/><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div>
<?php }
}
