<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:35:06
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/FieldExpressions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642b1aec0b54_74275736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5538ea3d248cb2a8ba7591a197b51e7f23732305' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/FieldExpressions.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642b1aec0b54_74275736 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="popupUi modal fade" data-backdrop="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SET_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="row"><span class="col-md-4"><select class="textType form-control"><optgroup><option data-ui="textarea" value="rawtext"><?php echo \App\Language::translate('LBL_RAW_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option data-ui="textarea" value="fieldname"><?php echo \App\Language::translate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option data-ui="textarea" value="expression"><?php echo \App\Language::translate('LBL_EXPRESSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup></select></span><span class="col-md-4 d-none useFieldContainer"><span name="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
" class="useFieldElement"><?php $_smarty_tpl->_assignInScope('MODULE_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields());
?><select class="useField form-control" data-placeholder="<?php echo \App\Language::translate('LBL_USE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'MODULE_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_FIELD']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></span><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value != '') {?><span name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name');?>
" class="useFieldElement"><?php $_smarty_tpl->_assignInScope('MODULE_FIELDS', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields());
?><select class="useField form-control" data-placeholder="<?php echo \App\Language::translate('LBL_USE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'MODULE_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_FIELD']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></span><?php }?></span><span class="col-md-4 d-none useFunctionContainer"><select class="useFunction form-control" data-placeholder="<?php echo \App\Language::translate('LBL_USE_FUNCTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value, 'FIELD_EXPRESSIONS_KEY', false, 'FIELD_EXPRESSION_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_EXPRESSION_VALUE']->value => $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_EXPRESSION_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></span></div><br /><div class="fieldValueContainer"><textarea data-textarea="true" class="fieldValue form-control"></textarea></div><br /><div id="rawtext_help" class="alert alert-info helpmessagebox d-none"><p><h5><?php echo \App\Language::translate('LBL_RAW_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p>2000</p><p><?php echo \App\Language::translate('LBL_VTIGER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div id="fieldname_help" class="helpmessagebox alert alert-info d-none"><p><h5><?php echo \App\Language::translate('LBL_EXAMPLE_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p><?php echo \App\Language::translate('LBL_ANNUAL_REVENUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><p><?php echo \App\Language::translate('LBL_NOTIFY_OWNER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div id="expression_help" class="alert alert-info helpmessagebox d-none"><p><h5><?php echo \App\Language::translate('LBL_EXAMPLE_EXPRESSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p><?php echo \App\Language::translate('LBL_ANNUAL_REVENUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
/12</p><p><?php echo \App\Language::translate('LBL_EXPRESSION_EXAMPLE2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><div class="modal-footer"><button class="btn btn-success" type="button" name="saveButton"><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-warning cancelLink" type="button" data-close-modal="modal"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div></div><div class="clonedPopUp"></div>
<?php }
}
