<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:25
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbb9ad4779_49982999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '816fc924cc0af32f24bb93d5e1b0767cd930b319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Pagination.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbb9ad4779_49982999 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (empty($_smarty_tpl->tpl_vars['VIEWNAME']->value)) {
$_smarty_tpl->_assignInScope('VIEWNAME', 'list');
}?><nav class="tpl-Pagination" aria-label="Page navigation"><ul class="js-pagination-list pagination m-0" data-total-count="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" data-js="data"><li class="js-page--set page-item <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists() || $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?> disabled <?php }?> pageNumber firstPage" data-id="1" data-js="data"><a class="page-link" href="#"><span class="fas fa-fast-backward mr-1 d-inline-block d-sm-none"></span><span class="d-none d-sm-inline"><?php echo \App\Language::translate('LBL_FIRST');?>
</span></a></li><li class="page-item <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists() || $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?>disabled<?php }?>"><a class="js-page--previous page-link" id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewPreviousPageButton" data-js="click" href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li><?php if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value != 0) {
$_smarty_tpl->_assignInScope('PAGIN_TO', $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value+4);
$_smarty_tpl->tpl_vars['PAGE_INDEX'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['PAGE_INDEX']->step = 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->total = (int) ceil(($_smarty_tpl->tpl_vars['PAGE_INDEX']->step > 0 ? $_smarty_tpl->tpl_vars['PAGIN_TO']->value+1 - ($_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value) : $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value-($_smarty_tpl->tpl_vars['PAGIN_TO']->value)+1)/abs($_smarty_tpl->tpl_vars['PAGE_INDEX']->step));
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->total > 0) {
for ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value = $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value, $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration = 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration <= $_smarty_tpl->tpl_vars['PAGE_INDEX']->total;$_smarty_tpl->tpl_vars['PAGE_INDEX']->value += $_smarty_tpl->tpl_vars['PAGE_INDEX']->step, $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration++) {
$_smarty_tpl->tpl_vars['PAGE_INDEX']->first = $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration == 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->last = $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration == $_smarty_tpl->tpl_vars['PAGE_INDEX']->total;
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value || $_smarty_tpl->tpl_vars['PAGE_INDEX']->value == $_smarty_tpl->tpl_vars['PAGIN_TO']->value) {
if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value > 5) {?><li class="page-item <?php if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value == 1) {?> disabled<?php }?>"><a class="page-link" id="dLabel" data-target="#" data-toggle="dropdown" role="button" href="#" aria-expanded="true">...</a><div class="js-page--jump-drop-down dropdown-menu listViewBasicAction" data-js="click" aria-labelledby="dLabel" id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewPageJumpDropDown"><a class="dropdown-item"><div class="row"><div class="col-md-3 p-0 textAlignCenter pushUpandDown2per"><span><?php echo \App\Language::translate('LBL_PAGE');?>
</span></div><div class="col-md-3 p-0"><input type="text" id="pageToJump" class="js-page-jump listViewPagingInput u-h-input-text textAlignCenter form-control" title="<?php echo \App\Language::translate('LBL_LISTVIEW_PAGE_JUMP');?>
"value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"data-js="keypress"/></div><div class="col-md-2 p-0 textAlignCenter pushUpandDown2per"><?php echo \App\Language::translate('LBL_OF');?>
</div><div class="js-page--total col-md-2 p-0 pushUpandDown2per textAlignCenter" id="totalPageCount" data-js="text"><?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
</div></div></a></div></li><?php }
break 1;
}?><li class="js-page--set page-item pageNumber<?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_INDEX']->value) {?> active disabled<?php }?>"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
" data-js="click"><a class="page-link" href="#"><?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
</a></li><?php }
}
}
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value <= $_smarty_tpl->tpl_vars['PAGE_COUNT']->value) {?><li class="js-page--set pageNumber<?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value) {?> active disabled<?php }?>" data-js="click"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
"><a class="page-link" href="#"><?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
</a></li><?php }?><li class="js-next-page page-item <?php if ((!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists())) {?>disabled<?php }?>"id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewNextPageButton" data-js="click"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li><?php if (!$_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><li class="js-count-number-records page-item js-popover-tooltip" data-js="popover|click" id="totalCountBtn" data-content="<?php echo \App\Language::translate('LBL_WIDGET_FILTER_TOTAL_COUNT_INFO');?>
"><a class="page-link" href="#"><span class="fas fa-signal"></span></a></li><?php }
if ($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value) {?><li class="js-page--set page-item <?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value || (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists())) {?> disabled <?php }?> pageNumber lastPage"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
" data-js="click"><a class="page-link" href="#"><span class="fas fa-fast-forward mr-1 d-inline-block d-sm-none"></span><span class="d-none d-sm-inline"><?php echo \App\Language::translate('LBL_LAST');?>
</span></a></li><?php }?><li class="page-item text-muted"><a class="page-link pageNumbersText"><span class="js-popover-tooltip d-block d-sm-none" tabindex="0" data-trigger="focus" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo \App\Language::translate('LBL_TO_LC');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();
if ($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
)<?php }?>"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"></span></span><span class="d-none d-sm-inline"><?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo \App\Language::translate('LBL_TO_LC');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
 <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
)<?php }?></span></a></li></ul></nav>
<?php }
}
