<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:01:34
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/SumFieldFromDependent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c64314e7d6516_62143490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a378ec9d0fc62dc1da65f9ae18a3e0cf84728030' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/SumFieldFromDependent.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64314e7d6516_62143490 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Workflows-Tasks-SumFieldFromDependent js-conditions-container" id="save_fieldvaluemapping" data-js="container"><div class="row js-add-basic-field-container js-conditions-row w-100 mb-2" data-js="clone | container"><div class="col-md-3 align-self-md-center"><strong><?php echo \App\Language::translate('LBL_SUMFIELDFROMDEPENDENT_SOURCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-md-4"><select name="sourceField" class="select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFieldsByType(\App\QueryGenerator::NUMERIC_TYPE), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sourceField === $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="row js-add-basic-field-container js-conditions-row w-100" data-js="clone | container"><div class="col-md-3 align-self-md-center"><strong><?php echo \App\Language::translate('LBL_SUMFIELDFROMDEPENDENT_TARGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-md-4"><select name="targetField" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="select2 form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFieldsByReference(), 'REFERENCE_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getReferenceList(), 'RELATION_MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
 (<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
)"><?php $_smarty_tpl->_assignInScope('RELATION_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_MODULE_MODEL']->value->getFieldsByType(\App\QueryGenerator::NUMERIC_TYPE), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->_assignInScope('VALUE', (((($_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getName()).('::')).($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value)).('::')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->targetField === $_smarty_tpl->tpl_vars['VALUE']->value) {?>selected<?php }?> ><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
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
?>
</select></div></div></div>
<?php }
}
