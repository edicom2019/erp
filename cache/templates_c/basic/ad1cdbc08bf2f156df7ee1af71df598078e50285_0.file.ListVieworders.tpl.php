<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:30:09
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OrdreNonAffectes/ListVieworders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d87198b4c2_45982200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1cdbc08bf2f156df7ee1af71df598078e50285' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OrdreNonAffectes/ListVieworders.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d87198b4c2_45982200 (Smarty_Internal_Template $_smarty_tpl) {
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
}?>"><thead><th class="noWrap p-2">N° ordre</th><th class="noWrap p-2">N° bon de commande</th><th class="noWrap p-2">Support</th><th class="noWrap p-2">Type ordre</th><th class="noWrap p-2">Date ordre</th><th class="noWrap p-2">Édition</th><th class="noWrap p-2">Raison sociale</th><th class="noWrap p-2">Commercial</th><th class="noWrap p-2">Signataire</th></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'ROWS', false, NULL, 'listview', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROWS']->value) {
?><tr class="listViewEntries" onclick="goToAffectation(<?php echo $_smarty_tpl->tpl_vars['ROWS']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['ROWS']->value[1];?>
)"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[1];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[2];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[3];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[4];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[5];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[6];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[7];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[8];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions"><?php echo $_smarty_tpl->tpl_vars['ROWS']->value[9];?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td>Aucun ordre à affecter</td></tr></tbody></table><?php }?></div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {

});

function goToAffectation(ordreId, numOrdre){
	window.location.href="index.php?module=Atribution&view=Edit&ordreId="+ordreId+"&numOrdre="+numOrdre;
}
<?php echo '</script'; ?>
><?php }
}
