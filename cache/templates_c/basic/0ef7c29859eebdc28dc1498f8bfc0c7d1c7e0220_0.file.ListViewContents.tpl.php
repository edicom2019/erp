<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:25
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\ListViewContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbb9bd11b5_86255598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef7c29859eebdc28dc1498f8bfc0c7d1c7e0220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\ListViewContents.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbb9bd11b5_86255598 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" id="listMaxEntriesMassEdit" value="<?php echo \AppConfig::main('listMaxEntriesMassEdit');?>
" /><input type="hidden" id="autoRefreshListOnChange" value="<?php echo AppConfig::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="clearfix"></div><div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg" href="#"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg" href="#"><?php echo \App\Language::translate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><div class="listViewEntriesDiv u-overflow-scroll-xs-down"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><div class="listViewLoadingImageBlock d-none modal noprint" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image" title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></div><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><table class="table tableBorderHeadBody listViewEntriesTable <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value && !$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isEmpty('entityState')) {?>listView<?php echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
}?>"><thead><tr class="listViewHeaders"><th class="p-2"><label class="sr-only" for="listViewEntriesMainCheckBox"><?php echo \App\Language::translate('LBL_SELECT_ALL');?>
</label><input type="checkbox" id="listViewEntriesMainCheckBox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" /></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_11_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><th class="noWrap p-2 <?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {?>columnSorted<?php }?>" <?php $_prefixVariable1=$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');
if (!empty($_prefixVariable1)) {?>style="width:<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');?>
%"<?php }?> <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2"<?php }?>><a href="javascript:void(0);" class="listViewHeaderValues float-left" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?>data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"<?php }?> data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {?><span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'tree' || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'categoryMultipicklist') {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
?><div class="d-flex align-items-center"><input class="searchInSubcategories mr-1" type="checkbox" id="searchInSubcategories<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" name="searchInSubcategories" value="1" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]['specialOption'])) {?> checked <?php }?>><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-content="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php }?></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()) {?><tr><td class="listViewSearchTd"><div class="flexWrapper"><a class="btn btn-light" role="button" data-trigger="listSearch" href="javascript:void(0);"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a><a class="btn btn-light float-right listRemoveBtn" role="button" href="index.php?view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span></a></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_12_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td class="pl-1"><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
if (isset($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value])) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?>
</td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_12_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<td class="reducePadding"></td></tr><?php }
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_COUNT', count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY', false, NULL, 'listview', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']++;
$_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId());
$_smarty_tpl->_assignInScope('RECORD_COLORS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewColor());
?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
' data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index'] : null)+1;?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions" <?php if ($_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder']) {?>style="border-left-color: <?php echo $_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder'];?>
;"<?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewLeftSide.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true, NULL, 'listHeaderForeach', array (
));
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_14_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName());
?><td class="listViewEntryValue noWrap <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
" data-raw-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value));?>
"><?php if (($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewNameFieldNavigationEnabled() == true && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isViewable()) {?><a <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true) {?>class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 js-list-field" data-js="width" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);
}?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<td class="noWrap rightRecordActions reducePadding"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewRightSide.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody><tfoot class="listViewSummation"><tr><td></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_15_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td <?php $_prefixVariable2=$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');
if (!empty($_prefixVariable2)) {?>style="width:<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');?>
%"<?php }?> <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2"<?php }?> class="noWrap <?php $_prefixVariable3=$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField();
if (!empty($_prefixVariable3)) {?>border<?php }?>" ><?php $_prefixVariable4=$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField();
if (!empty($_prefixVariable4)) {?><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button" data-operator="sum" data-field="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName();?>
" data-content="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"><span class="fas fa-signal" title="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"></span></button><span class="calculateValue"></span><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_15_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></tfoot></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND');?>
.<?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><?php echo \App\Language::translate('LBL_CREATE_SINGLE_RECORD');?>
</a><?php }?></td></tr></tbody></table><?php }?></div>

<?php }
}
