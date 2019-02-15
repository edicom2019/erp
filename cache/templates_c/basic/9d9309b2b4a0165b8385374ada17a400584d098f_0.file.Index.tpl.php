<?php
/* Smarty version 3.1.31, created on 2019-02-14 10:48:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/QuickCreateEditor/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c654778250595_82264044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d9309b2b4a0165b8385374ada17a400584d098f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/QuickCreateEditor/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c654778250595_82264044 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
	.fieldDetailsForm .zeroOpacity{
		display: none;
	}
	.visibility{
		visibility: hidden;
	}
	.paddingNoTop20{
		padding: 0 20px 20px 20px;
	}
</style>
<div class="" id="quickCreateEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><div class="widget_header row align-items-center"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_QUICK_CREATE_EDITOR_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="float-right col-md-4 h3"><select class="select2 form-control" name="quickCreateEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'moduleModel', false, 'mouleName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mouleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')) {
$_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported());
$_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey());
if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {
$_smarty_tpl->_assignInScope('singularLabel', 'LBL_EVENT_OR_TASK');
}
if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {?><option value="<?php echo $_smarty_tpl->tpl_vars['mouleName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mouleName']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['mouleName']->value);?>
</option><?php }
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#detailViewLayout"><strong><?php echo \App\Language::translate('LBL_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent paddingNoTop20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout"><div class="btn-toolbar justify-content-end"><button class="btn btn-success saveFieldSequence visibility mt-2 mb-2" type="button"><span class="fa fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div id="moduleBlocks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORDS_STRUCTURE']->value, 'RECORD_STRUCTURE', false, 'MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->value => $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE']->value);
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar') {
$_smarty_tpl->_assignInScope('MODULE_NAME', 'Tasks');
}?><div class="editFieldsTable block marginBottom10px border1px blockSortable" style="border-radius: 4px 4px 0px 0px;background: white;"><div class="row layoutBlockHeader no-margin"><div class="blockLabel col-md-5 marginLeftZero" style="padding:5px 10px 5px 10px"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="blockFieldsList row no-margin" style="padding:5px;min-height: 27px"><ul name="sortable1" class="connectedSortable col-md-6" style="list-style-type: none; min-height: 1px;padding:2px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'fieldlist', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {?><li><div class="opacity editFields marginLeftZero border1px" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row padding1per"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
?><div class="col-sm-1 col-2 col-md-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></div><div class="col-sm-11 col-10 col-md-10 marginLeftZero" style="word-wrap: break-word;"><span class="fieldLabel"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span></div></div></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><ul name="sortable2" class="connectedSortable col-md-6" style="list-style-type: none; margin: 0;min-height: 1px;padding:2px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {?><li><div class="opacity editFields marginLeftZero border1px" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row padding1per"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
?><span class="col-sm-1 col-2 col-md-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></span><div class="col-sm-11 col-10 col-md-10 marginLeftZero" style="word-wrap: break-word;"><span class="fieldLabel"><?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;</span></div></div></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div></div>
<?php }
}
