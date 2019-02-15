<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:31:08
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/RecordsList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8aca7e3d7_65788454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18676ef823eec127d070c80878a805ab697e0cb7' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/RecordsList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8aca7e3d7_65788454 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Modals-RecordsList modal-body js-modal-body" data-js="container"><input type="hidden" class="js-parent-module" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" class="js-source-record" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" class="js-source-field" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
"/><input type="hidden" class="js-related-parent-module" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
"/><input type="hidden" class="js-related-parent-id" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
"/><input type="hidden" class="js-multi-select" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
"/><input type="hidden" class="js-order-by" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
"/><input type="hidden" class="js-sort-order" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
"/><input type='hidden' class='js-page-number' data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"><input type="hidden" class="js-total-count" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
"/><input type='hidden' class="js-page-limit" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
"/><input type="hidden" class="js-no-entries" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
"><input type="hidden" class="js-additional-informations" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['ADDITIONAL_INFORMATIONS']->value;?>
"><input type="hidden" id="autoRefreshListOnChange" data-js="value" value="<?php echo AppConfig::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
"/><input type="hidden" class="js-filter-fields" data-js="value" value="<?php echo App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FILTER_FIELDS']->value));?>
"><div class="table-responsive"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value) {?><input type="checkbox" title="<?php echo App\Language::translate('LBL_SELECT_ALL_CURRENTPAGE');?>
"class="js-select-checkbox u-cursor-pointer" data-type="all" data-js="click"/><?php }?></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
?><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a href="#" class="<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?>js-change-order<?php }?>"data-js="click" data-name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName();?>
"data-next-order="<?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName()) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['ORDER_BY']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName()) {?><span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 ml-2"alt="<?php if ($_smarty_tpl->tpl_vars['SORT_ORDER']->value == 'ASC') {
echo App\Language::translate('LBL_SORT_ASCENDING');
} else {
echo App\Language::translate('LBL_SORT_DESCENDING');
}?>"></span><?php }?></a></th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><tr><td class="listSearchTd"><button class="btn btn-light" data-trigger="listSearch"><span class="fas fa-search"></span></button></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
?><td><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()],'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
?><tr class="u-cursor-pointer js-select-row" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" data-js="click"data-name='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
'data-info='<?php echo App\Json::encode($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRawData());?>
'><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 u-cursor-auto text-center"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value) {?><input class="js-select-checkbox" title="<?php echo App\Language::translate('LBL_SELECT_RECORD');?>
"type="checkbox" data-type="row" data-js="click"/><?php }?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', false, 'LISTVIEW_HEADERNAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value;?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('fromOutsideList') == true) {
echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value,true);
}?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><div><div class="emptyRecordsDiv"><?php echo App\Language::translate('LBL_NO_RELATED_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div></div><?php }?></div></div><?php }
}
