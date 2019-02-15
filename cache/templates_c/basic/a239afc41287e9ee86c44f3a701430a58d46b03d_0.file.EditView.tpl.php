<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:30:07
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/CustomView/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6437ff9ee6d8_98213623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a239afc41287e9ee86c44f3a701430a58d46b03d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/CustomView/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6437ff9ee6d8_98213623 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-horizontal" id="CustomView" name="CustomView" method="post" action="index.php"><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value) {?><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" id="stdfilterlist" name="stdfilterlist" value="" /><input type="hidden" id="advfilterlist" name="advfilterlist" value="" /><input type="hidden" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['CV_PRIVATE_VALUE']->value;?>
" /><input type="hidden" id="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="date_filters" data-value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['DATE_FILTERS']->value));?>
' /><div class='widget_header row customViewHeader'><div class="col-sm-5 col-12"><?php if (!$_smarty_tpl->tpl_vars['RECORD_ID']->value) {
$_smarty_tpl->_assignInScope('BREADCRUMB_TITLE', \App\Language::translate('LBL_VIEW_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value));
} else {
$_smarty_tpl->_assignInScope('BREADCRUMB_TITLE', $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('viewname'));
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-sm-7 col-12 btn-toolbar p-2 childrenMarginRight justify-content-end" role="toolbar"><div class="btn-group iconPreferences btn-group-toggle" data-toggle="buttons"><label class="btn btn-light<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isDefault()) {?> active btn-primary<?php }?>" title="<?php echo \App\Language::translate('LBL_SET_AS_DEFAULT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ><input id="setdefault" name="setdefault" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isDefault()) {?>checked="checked"<?php }?> value="1" /><span class="far fa-heart" data-check="fas fa-heart" data-unchecked="far fa-heart"></span></label><label class="btn btn-light<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isSetPublic()) {?> active btn-primary<?php }?>" title="<?php echo \App\Language::translate('LBL_SET_AS_PUBLIC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><input id="status" name="status" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isSetPublic()) {?> value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('status');?>
" checked="checked" <?php } else { ?> value="<?php echo $_smarty_tpl->tpl_vars['CV_PENDING_VALUE']->value;?>
" <?php }?> /><span class="far fa-eye-slash" data-check="fas fa-eye" data-unchecked="fa-eye-slash"></span></label><label class="btn btn-light<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeatured(true)) {?> active btn-primary<?php }?>" title="<?php echo \App\Language::translate('LBL_FEATURED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><input id="featured" name="featured" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeatured(true)) {?> checked="checked"<?php }?> value="1" /><span class="far fa-star" data-check="fas fa-star" data-unchecked="far fa-star"></span></label><label class="btn btn-light<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('setmetrics')) {?> active btn-primary<?php }?>" title="<?php echo \App\Language::translate('LBL_LIST_IN_METRICS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><input id="setmetrics" name="setmetrics" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('setmetrics') == '1') {?>checked="checked"<?php }?> value="1" /><span class="fas fa-desktop" data-check="fas fa-desktop" data-unchecked="fas fa-desktop"></span></label></div><button class="btn btn-success" id="customViewSubmit" type="submit"><span class="fa fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" onClick="window.location.reload()"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><?php $_smarty_tpl->_assignInScope('SELECTED_FIELDS', $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->getSelectedFields());
?><div class="childrenMarginTopX"><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader  c-panel__header"><span class="iconToggle fas fa-chevron-down small m-1 mt-2" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down"></span><h5 class=""><?php echo \App\Language::translate('LBL_BASIC_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></div><div class="c-panel__body py-1"><div class="form-group"><div class="row col-md-5"><label class="float-left col-form-label "><span class="redColor">*</span> <?php echo \App\Language::translate('LBL_VIEW_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</label><div class="col-md-7"><input type="text" id="viewname" class="form-control" data-validation-engine="validate[required]" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('viewname');?>
" /></div></div></div><div class="form-group"><label class=" col-form-label"><span class="redColor">*</span> <?php echo \App\Language::translate('LBL_CHOOSE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 (<?php echo \App\Language::translate('LBL_MAX_NUMBER_FILTER_COLUMNS');?>
):</label><div class="columnsSelectDiv col-md-12"><?php $_smarty_tpl->_assignInScope('MANDATORY_FIELDS', array());
?><div class=""><select data-placeholder="<?php echo \App\Language::translate('LBL_ADD_MORE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple class="columnsSelect form-control js-select2-sortable" id="viewColumnsSelect"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
?><optgroup label='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {
echo array_push($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName());
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName(),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> <span>*</span> <?php }?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EVENT_RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
?><optgroup label='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,'Events');?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {
echo array_push($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName());
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName(),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> <span>*</span> <?php }?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><input type="hidden" name="columnslist" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value);?>
' /><input id="mandatoryFieldsList" type="hidden" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value);?>
' /></div></div><div class="form-group marginbottomZero"><div class="row col-md-5"><label class="float-left col-form-label "><?php echo \App\Language::translate('LBL_COLOR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</label><div class="col-md-7"><div class="input-group"><input type="text" class="form-control colorPicker" name="color" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('color');?>
" /><span class="input-group-addon" style="background-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('color');?>
;">&nbsp;&nbsp;</span></div></div></div></div></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header"><span class="iconToggle fas fa-chevron-right small m-1 mt-2" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down"></span><h5 class=""><?php echo \App\Language::translate('LBL_DESCRIPTION_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></div><div class="c-panel__body py-1 d-none"><textarea name="description" id="description" class="js-editor" data-js="ckeditor"><?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('description');?>
</textarea></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header"><span class="iconToggle fas fa-chevron-down small m-1 mt-2" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down"></span><h5 class=""><?php echo \App\Language::translate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</h5></div><div class="c-panel__body py-1"><div class="filterConditionsDiv"><div class="row"><span class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</span></div></div></div></div></div><div class="filterActions py-2"><button class="cancelLink float-right btn btn-danger" type="reset" onClick="window.location.reload()"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button class="btn btn-success float-right mr-1" id="customViewSubmit" type="submit"><strong><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form>
<?php }
}
