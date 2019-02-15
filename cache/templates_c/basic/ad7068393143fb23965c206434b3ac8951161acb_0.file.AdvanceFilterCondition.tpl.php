<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:49:21
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/AdvanceFilterCondition.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642e71c98d52_68550976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7068393143fb23965c206434b3ac8951161acb' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/AdvanceFilterCondition.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642e71c98d52_68550976 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row js-conditions-row marginBottom10px align-items-center" data-js="container | clone"><div class="col-md-4"><select class="<?php if (empty($_smarty_tpl->tpl_vars['NOCHOSEN']->value)) {?>chzn-select<?php }?> form-control" name="columnname" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="none"></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
?><optgroup label='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
if (!empty($_smarty_tpl->tpl_vars['COLUMNNAME_API']->value)) {
$_smarty_tpl->_assignInScope('columnNameApi', $_smarty_tpl->tpl_vars['COLUMNNAME_API']->value);
} else {
$_smarty_tpl->_assignInScope('columnNameApi', 'getCustomViewColumnName');
}?><option value="<?php $_prefixVariable1=$_smarty_tpl->tpl_vars['columnNameApi']->value;
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->$_prefixVariable1();?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php $_prefixVariable2=$_smarty_tpl->tpl_vars['columnNameApi']->value;
if (App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->$_prefixVariable2()) == $_smarty_tpl->tpl_vars['CONDITION_INFO']->value['columnname']) {
$_smarty_tpl->_assignInScope('FIELD_TYPE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType());
$_smarty_tpl->_assignInScope('SELECTED_FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value);
$_tmp_array = isset($_smarty_tpl->tpl_vars['FIELD_INFO']) ? $_smarty_tpl->tpl_vars['FIELD_INFO']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['value'] = App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['CONDITION_INFO']->value['value']);
$_smarty_tpl->_assignInScope('FIELD_INFO', $_tmp_array);
?>selected="selected"<?php }?>data-fieldinfo='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>><?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value != $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name')) {?>(<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
)  <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-md-3"><select class="<?php if (empty($_smarty_tpl->tpl_vars['NOCHOSEN']->value)) {?>chzn-select<?php }?> form-control" name="comparator"><option value="none"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php $_smarty_tpl->_assignInScope('ADVANCE_FILTER_OPTIONS', $_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS_BY_TYPE']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value]);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTIONS']->value, 'ADVANCE_FILTER_OPTION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value == $_smarty_tpl->tpl_vars['CONDITION_INFO']->value['comparator']) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value[$_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value]);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-md-4 fieldUiHolder"><input name="<?php if ($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value) {
echo $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->get('name');
}?>" data-value="value" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONDITION_INFO']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" /></div><span class="d-none"><?php if (empty($_smarty_tpl->tpl_vars['CONDITION']->value)) {
$_smarty_tpl->_assignInScope('CONDITION', "and");
}?><input type="hidden" name="column_condition" value="<?php echo $_smarty_tpl->tpl_vars['CONDITION']->value;?>
" /></span><span class="col-md-1"><button class="btn btn-danger deleteCondition" type="button"><span class="fas fa-trash-alt" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button></span></div>
<?php }
}
