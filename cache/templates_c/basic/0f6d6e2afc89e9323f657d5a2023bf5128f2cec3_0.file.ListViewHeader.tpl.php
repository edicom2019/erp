<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:32:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642a85527842_14257564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6d6e2afc89e9323f657d5a2023bf5128f2cec3' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642a85527842_14257564 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listViewPageDiv" id="listViewContainer"><div class="listViewTopMenuDiv"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_MAPPEDFIELDS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="row align-items-center my-1"><div class="col-md-4 btn-toolbar"><button class="btn btn-light addButton" id="addButton" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-light importButton" id="importButton" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getImportViewUrl();?>
" title="<?php echo \App\Language::translate('LBL_IMPORT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-download"></i></button></div><div class="col-md-4 btn-toolbar"><select class="chzn-select" id="moduleFilter" ><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'OSSMailView') {?> continue <?php }?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-md-4 btn-toolbar justify-content-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
