<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:16
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Settings\Vtiger\SettingsIndexHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdcc56ccb8_30839592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '436f13b75fd6c6e3cac27d55a7104c944f27f764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Settings\\Vtiger\\SettingsIndexHeader.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdcc56ccb8_30839592 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="widget_header row "><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="row m-0 mt-2"><ul class="nav nav-tabs massEditTabs js-tabs" data-js="click"><li class="nav-item" data-mode="index" data-params="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array('count'=>$_smarty_tpl->tpl_vars['WARNINGS_COUNT']->value)));?>
"><a class="active nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_START',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="github"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_GITHUB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="systemWarnings"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_SYSTEM_WARNINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="security"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_SECURITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul></div><div class="indexContainer"></div>
<?php }
}
