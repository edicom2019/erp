<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:33:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ac01fba04_86373371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d1c7db2b4b42528e22f4f51d072f21c60a649ad' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ac01fba04_86373371 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-LayoutEditor-Index" id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"/><div class="widget_header row"><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) {
echo App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></div><div class="float-right col-md-6 form-inline"><div class="form-group float-right col-md-6"><select class="select2 form-control" name="layoutEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><span class="btn-group" style="margin-right: 10px;"><button class="btn btn-success importFieldModal" type="button" onclick='window.location.href="index.php?module=LayoutEditor&parent=Settings&view=importCustomField"'><span class="fa fa-download" aria-hidden="true"></span></button></span><div class="form-group float-right"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?>active<?php }?>"><input class="js-switch--inventory" type="radio" name="options" id="option1" data-js="change" data-value="basic" autocomplete="off"<?php if (!$_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?>checked<?php }?>> <?php echo App\Language::translate('LBL_BASIC_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?>active<?php }?>"><input class="js-switch--inventory" type="radio" name="options" id="option2" data-js="change" data-value="advanced" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?>checked<?php }?>> <?php echo App\Language::translate('LBL_ADVANCED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div></div><hr><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" role="tab" href="#detailViewLayout" aria-selected="true"><strong><?php echo App\Language::translate('LBL_DETAILVIEW_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><li class="nav-item inventoryNav"><a class="nav-link" data-toggle="tab" role="tab" href="#inventoryViewLayout" aria-selected="false"><strong><?php echo App\Language::translate('LBL_MANAGING_AN_ADVANCED_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php }?></ul><div class="tab-content layoutContent p-3 themeTableColor overflowVisible"><div class="tab-pane fade show active" id="detailViewLayout" role="tabpanel" aria-labelledby="detailViewLayout"><?php $_smarty_tpl->_assignInScope('FIELD_TYPE_INFO', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getAddFieldTypeInfo());
$_smarty_tpl->_assignInScope('IS_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isSortableAllowed());
$_smarty_tpl->_assignInScope('IS_BLOCK_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isBlockSortableAllowed());
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', array());
if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><div class="btn-toolbar" id="layoutEditorButtons"><button class="btn btn-success addButton addCustomBlock" type="button"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><span class="float-right"><button class="btn btn-success saveFieldSequence d-none" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></div><?php }?><div class="moduleBlocks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'BLOCK_MODEL', false, 'BLOCK_LABEL_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->_assignInScope('FIELDS_LIST', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLayoutBlockActiveFields());
$_smarty_tpl->_assignInScope('BLOCK_ID', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']) ? $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['BLOCK_ID']->value] = $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', $_tmp_array);
?><div id="block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"class="editFieldsTable block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
 mb-2 border1px <?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?> blockSortable<?php }?>"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('sequence');?>
"style="border-radius: 4px;background: white;"><div class="row layoutBlockHeader m-0"><div class="blockLabel col-md-6 col-sm-6 p-2 ml-0"><?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?><img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
"alt=""/>&nbsp;&nbsp;<?php }?><strong><?php echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></div><div class="col-md-6 col-sm-6 ml-0"><div class="float-right btn-toolbar blockActions m-1"><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isAddCustomFieldEnabled()) {?><div class="btn-group"><button class="btn btn-success addCustomField" type="button"><span class="fa fa-plus u-mr-5px"></span><strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isActionsAllowed()) {?><div class="btn-group ml-1"><button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><strong><?php echo App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu float-right"><li class="blockVisibility" data-visible="<?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?>1<?php } else { ?>0<?php }?>"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
"><a class="dropdown-item" href="javascript:void(0)"><span class="fas fa-check <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> d-none <?php }?>"></span>&nbsp;<?php echo App\Language::translate('LBL_ALWAYS_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="inActiveFields"><a class="dropdown-item" href="javascript:void(0)"><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isCustomized()) {?><li class="deleteCustomBlock"><a class="dropdown-item" href="javascript:void(0)"><?php echo App\Language::translate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php }?></ul></div><?php }?></div></div></div><div class="blockFieldsList blockFieldsSortable row m-0 p-1"><ul name="<?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>sortable1<?php }?>"class="sortTableUl connectedSortable col-md-6"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row p-2"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
?><div class="col-2 col-sm-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
"border="0"alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a><?php }?></div><div class="col-10 col-sm-10 ml-0 fieldContainer" style="word-wrap: break-word;"><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span><span class="float-right actions"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"id="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"/><button class="btn btn-primary btn-sm copyFieldLabel float-right ml-1" data-target="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><button class="btn btn-success btn-sm editFieldDetails ml-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isCustomField() == 'true') {?><button class="btn btn-danger btn-sm deleteCustomField ml-1" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-info btn-sm js-context-help ml-1" data-js="click" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-url="index.php?module=LayoutEditor&parent=Settings&view=HelpInfo&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
&source=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><ul <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>name="sortable2"<?php }?>class="connectedSortable sortTableUl col-md-6"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row p-2"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
?><div class="col-2 col-sm-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
"border="0"alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a><?php }?></div><div class="col-10 col-sm-10 ml-0 fieldContainer" style="word-wrap: break-word;"><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span><span class="float-right actions"><button class="btn btn-primary btn-sm copyFieldLabel float-right ml-1" data-target="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"id="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"/><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><button class="btn btn-success btn-sm editFieldDetails ml-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isCustomField() == 'true') {?><button class="btn btn-danger btn-sm deleteCustomField ml-1" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-info btn-sm js-context-help ml-1" data-js="click" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-url="index.php?module=LayoutEditor&parent=Settings&view=HelpInfo&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
&source=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><input type="hidden" class="inActiveFieldsArray" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['IN_ACTIVE_FIELDS']->value);?>
'/><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NewCustomBlock.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NewCustomField.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddBlockModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CreateFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InactiveFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><div class="tab-pane mt-0" id="inventoryViewLayout" role="tabpanel" aria-labelledby="inventoryViewLayout"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Inventory.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php }?></div></div></div>
<?php }
}
