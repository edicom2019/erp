<?php
/* Smarty version 3.1.31, created on 2019-02-14 14:19:07
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PickListDependency/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6578db7122d9_98214351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f523517397291e97c2ac7cc8017ec6eda3ca9d0e' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PickListDependency/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6578db7122d9_98214351 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PickListDependency-EditView"><div class="widget_header row mb-3"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="contents"><form id="pickListDependencyForm" class="form-row" method="POST"><?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)) {?><input type="hidden" class="editDependency" value="true"/><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE']->value;?>
"/><input type="hidden" name="sourceField" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield');?>
"/><input type="hidden" name="targetField" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('targetfield');?>
"/><?php }?><div class="col-md-4 d-flex mb-2 mb-md-0"><label class="muted u-text-small-bold u-white-space-nowrap mr-2 my-auto"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="w-100"><select name="sourceModule" title="<?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="select2 form-control ml-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value, 'MODULE_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE']->value) {?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label') == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="col-md-4 d-flex mb-2 mb-md-0"><label class="muted u-text-small-bold u-white-space-nowrap mr-2 my-auto"><?php echo \App\Language::translate('LBL_SOURCE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="w-100"><select id="sourceField" name="sourceField" class="select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"title="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value=''></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_LABEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield') == $_smarty_tpl->tpl_vars['FIELD_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="col-md-4 d-flex mb-2 mb-md-0"><label class="muted u-text-small-bold u-white-space-nowrap mr-2 my-auto"><?php echo \App\Language::translate('LBL_TARGET_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="w-100"><select id="targetField" name="targetField" class="select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"title="<?php echo \App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value=''></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_LABEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('targetfield') == $_smarty_tpl->tpl_vars['FIELD_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="d-none errorMessage my-3"><div class="alert alert-warning"><strong><?php echo \App\Language::translate('LBL_ERR_CYCLIC_DEPENDENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div></div><div id="dependencyGraph" class="my-3 w-100"><?php if ($_smarty_tpl->tpl_vars['DEPENDENCY_GRAPH']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DependencyGraph.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></form></div></div>
<?php }
}
