<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:31:08
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/RecordsListHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8aca446a2_70434708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '532935b685523ec32a707bc092fc56272c681167' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/RecordsListHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8aca446a2_70434708 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Modals-RecordsListHeader modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class="modal-header d-flex justify-content-between flex-wrap flex-lg-nowrap"><h5 class="modal-title mr-2 my-auto"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="<?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><div class="d-flex justify-content-center justify-content-sm-between w-100 mt-2 mt-lg-0 mx-lg-2 order-3 order-lg-0 flex-wrap"><div class="mb-2 mb-sm-0 btn-toolbar u-w-sm-down-100"><?php if ($_smarty_tpl->tpl_vars['SWITCH']->value) {?><div class="mr-2 mb-2 mb-sm-0"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary active"><input class="js-hierarchy-records" data-js="value|change" type="radio" name="hierarchyRecords" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
" checked=""><?php echo $_smarty_tpl->tpl_vars['SWITCH_ON_TEXT']->value;?>
</label><label class="btn btn-outline-primary"><input class="js-hierarchy-records" data-js="value|change" type="radio" name="hierarchyRecords" value="0"><?php echo App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><a href="#" class="js-popover-tooltip" data-js="popover" title="" data-placement="auto" data-content="<?php echo App\Language::translate('LBL_POPUP_NARROW_DOWN_RECORDS_LIST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-original-title="<?php echo App\Language::translate('LBL_POPUP_SWITCH_BUTTON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle ml-1"></span></a></div><?php }
if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value && !empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)) {?><button class="js-selected-rows btn btn-outline-secondary c-btn-block-sm-down" data-js="click"><strong><span class="fas fa-check mr-2"></span><?php echo App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?></div><div class="js-pagination-container" data-js="container"><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEWNAME'=>'recordsList'), 0, true);
?>
</div></div><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button></div><?php }
}
