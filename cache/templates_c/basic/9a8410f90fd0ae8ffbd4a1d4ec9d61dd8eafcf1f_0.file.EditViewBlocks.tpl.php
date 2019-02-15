<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:52
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/EditViewBlocks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c64292c940573_18317590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8410f90fd0ae8ffbd4a1d4ec9d61dd8eafcf1f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/EditViewBlocks.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64292c940573_18317590 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='verticalScroll'><div class='editViewContainer'><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)) {?><input type="hidden" name="picklistDependency" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'/><?php }
if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
'/><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE_NAME', $_prefixVariable1);
$_smarty_tpl->_assignInScope('IS_PARENT_EXISTS', strpos($_smarty_tpl->tpl_vars['MODULE']->value,":"));
if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value != '') {?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" name="view"/><?php } else { ?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><?php }?><input type="hidden" name="action" value="Save"/><input type="hidden" name="record" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/><input type="hidden" name="defaultCallDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('callduration');?>
"/><input type="hidden" name="defaultOtherEventDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration');?>
"/><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'duplicate') {?><input type="hidden" name="_isDuplicateRecord" value="true"/><input type="hidden" name="_duplicateRecord" value="<?php echo \App\Request::_get('record');?>
"/><?php }
if ($_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value) {?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" name="relationOperation" value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value;?>
"/><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->getModule()->getFieldsByDisplayType(9), 'FIELD', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value),$_smarty_tpl->tpl_vars['RECORD']->value);?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class='widget_header row mb-3'><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'EditViewBlockLevelLoop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]);
$_smarty_tpl->_assignInScope('BLOCKS_HIDE', $_smarty_tpl->tpl_vars['BLOCK']->value->isHideBlock($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['VIEW']->value));
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
if ($_smarty_tpl->tpl_vars['BLOCKS_HIDE']->value) {?><div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><div class="blockHeader c-panel__header align-items-center"><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_MAILING_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_DELIVERY_INFORMATION') {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', TRUE);
} else {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', FALSE);
}?><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="hide"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="show"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><h5 class="m-0"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>"data-js="display"><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_MAILING_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_DELIVERY_INFORMATION') {?><div class="<?php if (!$_smarty_tpl->tpl_vars['SEARCH_ADDRESS']->value) {?> <?php }?> adressAction row py-2 justify-content-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BlockHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php }?><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {
$_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {
$_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_REAPEAT") {?> col-sm-3<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_RECURRENCE") {?> col-sm-9<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?>col-sm-4<?php } else { ?> col-md-12 m-auto<?php }?> fieldRow row form-group align-items-center my-1"><?php $_smarty_tpl->_assignInScope('HELPINFO', explode(',',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo')));
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', (($_smarty_tpl->tpl_vars['MODULE']->value).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
?><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if (in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['HELPINFO']->value) && \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo') != $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right" title="" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo');?>
" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 w-100 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?> col-lg-12 col-xl-9 <?php }?> fieldValue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20') {?> colspan="3" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> colspan="4" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "300") {?><label class="u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0, true);
?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
