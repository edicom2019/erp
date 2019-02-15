<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:47:20
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642df82b4ce5_54052426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968ee89c9c9eb7bcede84fe378c85bb9b8a7cdd2' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642df82b4ce5_54052426 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- tpl-Settings-Worklfows-ListViewHeader --><div class="listViewPageDiv"><div class="listViewTopMenuDiv"><div class="widget_header row"><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-md-6"><b class="float-right pt-2"><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isDisabled()) {
echo \App\Language::translate('LBL_DISABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}
if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isRunning()) {
echo \App\Language::translate('LBL_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}
if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isEnabled()) {
if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->hadTimedout) {
echo \App\Language::translate('LBL_LAST_SCAN_TIMED_OUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<?php } elseif ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime() != '') {
echo \App\Language::translate('LBL_LAST_SCAN_AT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime();?>
&nbsp;&<?php echo \App\Language::translate('LBL_TIME_TAKEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getTimeDiff();?>
&nbsp;<?php echo \App\Language::translate('LBL_SHORT_SECONDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
}
}?></b></div></div><div class="listViewActionsDi row my-2"><div class="col-lg-4 btn-toolbar d-flex justify-content-between justify-content-lg-start"><button class="btn btn-success addButton" <?php if (stripos($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl(),'javascript:') === 0) {?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl(),strlen('javascript:'));?>
;"<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl();?>
"' <?php }?>><i class="fas fa-plus"></i>&nbsp;<strong><?php echo \App\Language::translate('LBL_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate('LBL_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-outline-secondary ml-1 importButton" id="importButton" data-url="<?php echo Settings_Workflows_Module_Model::getImportViewUrl();?>
"title="<?php echo \App\Language::translate('LBL_IMPORT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-download"></i></button></div><div class="col-lg-3 btn-toolbar ml-0 mt-1 mt-lg-0"><select class="select2 form-control" id="moduleFilter"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-lg-5 mt-1 mt-lg-0 d-flex justify-content-center justify-content-lg-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div><div class="listViewContentDiv" id="listViewContents"><!-- /tpl-Settings-Worklfows-ListViewHeader -->
<?php }
}
