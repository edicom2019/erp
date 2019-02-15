<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:53
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/SSingleOrders/RelatedList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8611dc097_82034615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '209a598fdf1f96ae341da21d38e55b6b1a5299c2' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/SSingleOrders/RelatedList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8611dc097_82034615 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="RelatedList relatedContainer"><?php $_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));
$_smarty_tpl->_assignInScope('INVENTORY_MODULE', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isInventory());
?><input type="hidden" name="currentPageNum" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getCurrentPage();?>
" /><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value;?>
" id="noOfEntries"><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_ENTRIES']->value;?>
" id='totalCount'><input type="hidden" id="autoRefreshListOnChange" value="<?php echo AppConfig::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type="hidden" class="relatedView" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_VIEW']->value;?>
"><div class="relatedHeader my-1"><div class="d-inline-flex flex-wrap w-100 justify-content-between"><div class="u-w-sm-down-100 d-flex flex-wrap flex-sm-nowrap mb-1 mb-md-0"><?php if (count($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS']) > 0) {?><div class="btn-group mr-sm-1 relatedViewGroup c-btn-block-sm-down mb-1 mb-sm-0"><?php $_smarty_tpl->_assignInScope('TEXT_HOLDER', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'], 'RELATEDLIST_VIEW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value) {
if ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value == $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('view')) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->getLabel());
if ($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon') != '') {
$_smarty_tpl->_assignInScope('BTN_ICON', $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon'));
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<button class="btn btn-light dropdown-toggle relatedViewBtn" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['BTN_ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BTN_ICON']->value;?>
 mr-1"></span><?php } else { ?><span class="fas fa-list mr-1"></span><?php }?><span class="textHolder"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEXT_HOLDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'], 'RELATEDLIST_VIEW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value) {
?><li><a class="dropdown-item" href="#" data-view="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('view');?>
"><?php if ($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon');?>
 mr-1"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC'], 'RELATED_LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
ob_start();
echo \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,'CreateView');
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1) {?><div class="btn-group mr-md-1 c-btn-block-sm-down"><?php ob_start();
echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_selectRelation');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('IS_SELECT_BUTTON', $_prefixVariable2);
?><button type="button" class="btn btn-light addButton<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?> selectRelation <?php }?> modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->linkqcs == true) {?>quickCreateSupported<?php }?>"<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?> data-moduleName=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_module')->get('name');?>
 <?php }
if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->isPageLoadLink())) {
if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value) {?> data-name="<?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->getName();?>
" <?php }?>data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
"<?php } else { ?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(),strlen("javascript:"));?>
;'<?php }
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value != true && stripos($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(),'javascript:') !== 0) {?>name="addButton"<?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == false) {?><span class="fas fa-plus mr-1"></span><?php }
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?><span class="fas fa-search mr-1"></span><?php }
echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
</button></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class="d-flex flex-wrap u-w-sm-down-100 justify-content-between justify-content-md-end"><div class="paginationDiv"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEWNAME'=>'related'), 0, true);
?>
</div><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value) {?><div class="ml-1"><?php $_smarty_tpl->_assignInScope('COLOR', AppConfig::search('LIST_ENTITY_STATE_COLOR'));
?><input type="hidden" class="entityState" value="<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('entityState')) {
echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
} else { ?>Active<?php }?>"><div class="dropdown dropdownEntityState u-remove-dropdown-icon"><button class="btn btn-light dropdown-toggle" type="button" id="dropdownEntityState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Archived') {?><span class="fas fa-archive"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Trash') {?><span class="fas fa-trash-alt"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'All') {?><span class="fas fa-bars"></span><?php } else { ?><span class="fas fa-undo-alt"></span><?php }?></button><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEntityState"><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Active']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Active'];?>
;"<?php }?>><a class="dropdown-item<?php if (!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') || $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Active') {?> active<?php }?>" href="#" data-value="Active"><span class="fas fa-undo-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Archived']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Archived'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?> active<?php }?>" href="#" data-value="Archived"><span class="fas fa-archive mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Trash']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Trash'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?> active<?php }?>" href="#" data-value="Trash"><span class="fas fa-trash-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</a></li><li><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?> active<?php }?>" href="#" data-value="All"><span class="fas fa-bars mr-2"></span><?php echo \App\Language::translate('LBL_ALL');?>
</a></li></ul></div></div><?php }?></div></div></div><?php if ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value === 'ListPreview') {?><div class="relatedContents"><div class="d-flex"><input type="hidden" id="defaultDetailViewName" value="<?php echo AppConfig::module($_smarty_tpl->tpl_vars['MODULE']->value,'defaultDetailViewName');?>
" /><div class="c-side-block c-side-block--left js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_LIST');?>
</div></div></div><div class="c-list-preview js-list-preview js-fixed-scroll" data-js="scroll"><div class="c-list-preview__content js-list-preview--scroll" data-js="perfectScrollbar"><div id="recordsList"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div><div class="c-detail-preview js-detail-preview"><iframe class="listPreviewframe" frameborder="0"></iframe></div><div class="c-side-block c-side-block--right js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_DETAIL');?>
</div></div></div></div></div><?php } else { ?><div class="relatedContents"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php }?></div>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	let allowedAmount;
	let grossAmount;
	let sum;
	let record = getQueryVariable('record');
	let relatedModule = getQueryVariable('relatedModule');
	let url = "index.php?action=Edicom&method=getOrderAllowedAmount&record=" + record + "&relatedModule=" + relatedModule;
	AppConnector.request(url).done(function (data) {
		grossAmount = Number(data.result.grossAmount);
		sum = Number(data.result.sum);
		allowedAmount = grossAmount - sum;
	});
	$(document).off('change', '#ReglementsPrevisionnels_editView_fieldName_montant');
	$(document).off('change', '#FirmesAfacturer_editView_fieldName_montant');
	$(document).on('change', '#ReglementsPrevisionnels_editView_fieldName_montant', function(){
		if($(this).val() > allowedAmount){
			Vtiger_Helper_Js.showPnotify("Montant supérieur au montant permis " + allowedAmount);
			$(this).val(null);
		}
		if($(this).val() == 0)
			$(this).val(null);
	});
	$(document).on('change', '#FirmesAfacturer_editView_fieldName_montant', function(){
		if($(this).val() > allowedAmount){
			Vtiger_Helper_Js.showPnotify("Montant supérieur au montant permis " + allowedAmount);
			$(this).val(null);
		}
		if($(this).val() == 0)
			$(this).val(null);
	});
});

function getQueryVariable(variable)
{
	let query = window.location.search.substring(1);
	let vars = query.split("&");
	for (let i=0;i<vars.length;i++) {
        let pair = vars[i].split("=");
        if(pair[0] == variable)
       		return pair[1];
	}
	return null;
}
<?php echo '</script'; ?>
><?php }
}
