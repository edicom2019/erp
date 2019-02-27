<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:39
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Detail\Widget\Activities.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc3f9a0d83_45679184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d552faeadb5db40e1778cb5a636601c8e0f7e4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\Activities.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc3f9a0d83_45679184 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="c-detail-widget u-mb-13px js-detail-widget activityWidgetContainer" data-js=”container”><div class="c-detail-widget__header js-detail-widget-header" data-js=”container|value><div class="form-row align-items-center py-1"><div class="col-9 col-md-5 col-sm-6"><div class="widgetTitle u-text-ellipsis"><h5 class="mb-0"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo App\Language::translate('LBL_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div></div><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="option1" data-js="change" data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-on-val="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['on']);?>
"data-basic-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"autocomplete="off"> <?php echo App\Language::translate('LBL_CURRENT');?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="option2" data-js="change" data-basic-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-text="data-off-text <?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-val="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['off']);?>
"autocomplete="off"> <?php echo App\Language::translate('LBL_HISTORY');?>
</label></div><div class="col float-right"><button class="btn btn-sm btn-light float-right addButton createActivity" data-url="sourceModule=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
&sourceRecord=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
&relationOperation=true" type="button"title="<?php echo App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-plus"></span></button></div></div><hr class="widgetHr"></div><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['url'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><div class="c-detail-widget__content js-detail-widget-content" data-js=”container|value”></div></div></div>
<?php }
}
