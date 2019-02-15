<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:32:25
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642a797fd8a2_19681688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5be52b496130bf738b6d513e99fbb77c66d8a2' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642a797fd8a2_19681688 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['WARNINGS']->value) {?><div id="systemWarningAletrs"><div class="modal fade static"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-exclamation-circle redColor mr-1"></span><?php echo App\Language::translate('LBL_SYSTEM_WARNINGS','Settings:Vtiger');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="warnings"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WARNINGS']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><div class="warning d-none clearfix" data-id="<?php echo get_class($_smarty_tpl->tpl_vars['ITEM']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['ITEM']->value->getTpl()) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['ITEM']->value->getTpl(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?><h3 class="marginTB3"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getTitle(),'Settings:SystemWarnings');?>
</h3><p><?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getDescription();?>
</p><div class="float-right"><?php if ($_smarty_tpl->tpl_vars['ITEM']->value->getStatus() != 1 && $_smarty_tpl->tpl_vars['ITEM']->value->getPriority() < 8) {?><button class="btn btn-warning ajaxBtn" type="button" data-params="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getStatus();?>
"><span class="fas fa-minus-circle mr-1"></span><?php echo App\Language::translate('BTN_SET_IGNORE','Settings:SystemWarnings');?>
</button><?php }
if ($_smarty_tpl->tpl_vars['ITEM']->value->getLink()) {?><a class="btn btn-success ml-1" href="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getLink();?>
" target="_blank"><span class="fas fa-link mr-1"></span><?php echo $_smarty_tpl->tpl_vars['ITEM']->value->linkTitle;?>
</a><?php }?><button class="btn btn-danger cancel ml-1" type="button"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div><?php }?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div></div></div></div><?php }?><div class="settingsIndexPage"><div class="form-row d-flex justify-content-lg-start justify-content-xl-center"><span class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 settingsSummary"><a href="javascript:Settings_Vtiger_Index_Js.showWarnings()"><h3 class="summaryCount u-font-size-44px"><?php echo $_smarty_tpl->tpl_vars['WARNINGS_COUNT']->value;?>
</h3><p class="summaryText my-3"><?php echo \App\Language::translatePluralized('PLU_SYSTEM_WARNINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['WARNINGS_COUNT']->value);?>
</p></a></span><span class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 settingsSummary"><a href="javascript:Settings_Vtiger_Index_Js.showSecurity()"><h3 class="summaryCount u-font-size-44px"><?php echo $_smarty_tpl->tpl_vars['SECURITY_COUNT']->value;?>
</h3><p class="summaryText my-3"><?php echo \App\Language::translatePluralized('PLU_SECURITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['SECURITY_COUNT']->value);?>
</p></a></span><span class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 settingsSummary"><a href="index.php?module=Users&parent=Settings&view=List"><h3 class="summaryCount u-font-size-44px"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h3><p class="summaryText my-3"><?php echo \App\Language::translatePluralized('PLU_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['USERS_COUNT']->value);?>
</p></a></span><span class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 settingsSummary"><a href="index.php?module=Workflows&parent=Settings&view=List"><h3 class="summaryCount u-font-size-44px"><?php echo $_smarty_tpl->tpl_vars['ALL_WORKFLOWS']->value;?>
</h3><p class="summaryText my-3"><?php echo \App\Language::translatePluralized('PLU_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['ALL_WORKFLOWS']->value);?>
</p></a></span><span class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 settingsSummary"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h3 class="summaryCount u-font-size-44px"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h3><p class="summaryText my-3"><?php echo \App\Language::translatePluralized('PLU_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value);?>
</p></a></span></div><br /><br /><h3><?php echo \App\Language::translate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><hr><?php $_smarty_tpl->_assignInScope('SPAN_COUNT', 1);
?><div class="col-md-12 form-row d-flex justify-content-lg-start justify-content-xl-center m-0" id="settingsShortCutsContainer"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value, 'SETTINGS_SHORTCUT', false, NULL, 'shortcuts', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['SPAN_COUNT']->value == 3) {
$_smarty_tpl->_assignInScope('SPAN_COUNT', 1);
?> <?php
continue 1;
}
$_smarty_tpl->_assignInScope('SPAN_COUNT', $_smarty_tpl->tpl_vars['SPAN_COUNT']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div>
<?php }
}
