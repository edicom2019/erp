<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:27
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Settings\ModuleManager\ListContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdd7bc0aa1_78374056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '601325d72590b35f20dce2c5d0faee304d2d0d03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Settings\\ModuleManager\\ListContents.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdd7bc0aa1_78374056 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="" id="moduleManagerContents"><div class="widget_header row mb-2"><div class="col-md-7 d-flex align-items-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-md-5"><span class="btn-toolbar float-lg-right mt-1"><span class="btn-group mr-sm-0 mr-lg-1 c-btn-block-md-down"><button class="btn btn-success createModule c-btn-block-md-down" type="button"><span class="fas fa-desktop"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_CREATE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><?php if (\AppConfig::main('systemMode') !== 'demo') {?><span class="btn-group c-btn-block-md-down mt-1 mt-lg-0"><button class="btn btn-primary c-btn-block-md-down" type="button" onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['IMPORT_USER_MODULE_URL']->value;?>
"'><span class="fas fa-download"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_IMPORT_ZIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><?php }?></span></div></div><div class="contents"><div class="js-scrollbar position-relative" data-js="container"><table class="table table-bordered table-sm position-relative"><thead><tr class="blockHeader"><th><span><?php echo \App\Language::translate('LBL_LIBRARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_DIR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ModuleManager_Library_Model::getAll(), 'LIBRARY', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['LIBRARY']->value) {
?><tr><td><strong><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</strong></td><td class="text-nowrap"><?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['dir'];?>
</td><td class="text-nowrap"><a href="<?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['url'];?>
</a></td><td><?php if ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] == 1) {?><span class="badge badge-success bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_DOWNLOADED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far fa-check-circle ml-1"></span></span><?php } elseif ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] == 2) {?><span class="badge badge-warning bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_NEEDS_UPDATING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-info-circle ml-1"></span></span><?php } else { ?><span class="badge badge-danger bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_NO_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-ban ml-1"></span></span><?php }?></td><td class="d-flex align-items-center justify-content-center p-2"><span class="btn-group"><?php if ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] === 0) {?><form method="POST" action="index.php?module=ModuleManager&parent=Settings&action=Library&mode=download&name=<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm"><span class="fas fa-download mr-1"></span><strong><?php echo \App\Language::translate('BTN_LIBRARY_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></form><?php } else { ?><form method="POST" action="index.php?module=ModuleManager&parent=Settings&action=Library&mode=update&name=<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm"><span class="fas fa-redo-alt mr-1"></span><strong><?php echo \App\Language::translate('BTN_LIBRARY_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></form><?php }?></span></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><br/><table class="table table-bordered table-sm"><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'MODULE_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
$_smarty_tpl->_assignInScope('MODULE_ACTIVE', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive());
?></tr><tr class=" col-sm-12 col-lg-6 col-xl-4 float-left p-0"><td class="d-flex justify-content-center"><div class="form-row px-3 w-100 align-items-center justify-content-center"><div class="col-1 col-md-1 text-center float-left p-1"><input type="checkbox" value="" name="moduleStatus" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" data-module-translation="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()) {?>checked<?php }?> /></div><div class="col-2 col-sm-2 col-md-2 text-center text-md-left p-1 <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>dull <?php }?>"><span class="fa-2x userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"></span></div><div class="col-9 col-sm-6 col-md-4 text-center text-md-left p-1 <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>dull <?php }?>"><h5 class="m-0 u-text-ellipsis text-left"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-12 col-sm-2 col-md-5 p-1 form-row align-items-md-center justify-content-end"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isExportable()) {?><form class="c-btn-block-sm-down" method="POST" action="index.php?module=ModuleManager&parent=Settings&action=ModuleExport&mode=exportModule&forModule=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm float-right ml-0 ml-md-2 c-btn-block-sm-down mb-1 mb-md-0"><i class="far fa-arrow-alt-circle-down"></i></button></form><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('customized')) {?><button type="button" class="deleteModule btn btn-danger btn-sm float-right ml-0 ml-md-2 c-btn-block-sm-down mb-1 mb-md-0" name="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><span class="fas fa-trash-alt"></span> </button><?php }
$_smarty_tpl->_assignInScope('SETTINGS_LINKS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSettingLinks());
if (!in_array($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RESTRICTED_MODULES_LIST']->value) && (count($_smarty_tpl->tpl_vars['SETTINGS_LINKS']->value) > 0)) {?><div class="btn-group-sm d-flex justify-content-end ml-0 ml-md-2 c-btn-block-sm-down u-remove-dropdown-icon <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>d-none<?php }?>" role="group"><button class="btn dropdown-toggle btn-outline-secondary c-btn-block-sm-down" data-toggle="dropdown"><strong><span class="fas fa-cog"></span></strong></button><div class="dropdown-menu float-right"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_LINKS']->value, 'SETTINGS_LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value) {
?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linkurl'];?>
"><span class="  <?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linkicon'];?>
 mr-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linklabel'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><?php }?></div></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></table></div></div>
<?php }
}
