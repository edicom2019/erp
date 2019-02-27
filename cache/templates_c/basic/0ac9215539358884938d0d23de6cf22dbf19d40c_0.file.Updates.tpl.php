<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:39
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Detail\Widget\Updates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc3f9641e6_32181257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac9215539358884938d0d23de6cf22dbf19d40c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\Updates.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc3f9641e6_32181257 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Detail-Widget-Updates c-detail-widget u-mb-13px js-detail-widget" data-js=”container”><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
"><div class="c-detail-widget__header js-detail-widget-header" data-js=”container|value><div class="form-row align-items-center py-1"><div class="col-9 col-md-5 col-sm-6"><div class="widgetTitle u-text-ellipsis"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div></div><?php if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader'])) {?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="option1" data-js="change" data-on-val="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['on'];?>
" data-urlparams="whereCondition"autocomplete="off"checked> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['on'];?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="option2" data-js="change" data-off-val="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['off'];?>
"data-urlparams="whereCondition"autocomplete="off"> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['off'];?>
</label></div><?php }?><div class="col-md-3 col-sm-3 float-right"><div class="float-right"><div class="btn-group"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['newChanege'] && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId()) {?><div class="float-right btn-group"><button id="btnChangesReviewedOn" type="button" class="btn btn-success btn-sm btnChangesReviewedOn" title="<?php echo \App\Language::translate('BTN_CHANGES_REVIEWED_ON',$_smarty_tpl->tpl_vars['WIDGET']->value['moduleBaseName']);?>
"><span class="far fa-check-circle"></span></button></div><?php }?></div></div></div></div><hr class="widgetHr"/></div><div class="c-detail-widget__content js-detail-widget-content" data-js=”container|value”></div></div></div>
<?php }
}
