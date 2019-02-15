<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fd57041_36170829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc3374ee42c10529e01efac8e90d169b5f07abb' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fd57041_36170829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><div class="detailViewContainer"><div class="row detailViewTitle p-0"><?php if ($_smarty_tpl->tpl_vars['SHOW_BREAD_CRUMBS']->value) {?><div class="o-breadcrumb js-breadcrumb widget_header mb-2 d-flex justify-content-between px-2 w-100"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><a class="btn btn-outline-dark d-md-none my-auto o-breadcrumb__actions-btn js-breadcrumb__actions-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="detailViewToolbar my-auto o-breadcrumb__actions js-breadcrumb__actions d-flex float-right flex-column flex-md-row" id="o-view-actions__container"><?php if ($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL']) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewAdditional','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }
if ($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC']) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }
if ($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_EXTENDED']) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_EXTENDED'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewExtended','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }?></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'], 'WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
?><div class="col-md-12 px-0"><?php echo Vtiger_Widget_Model::processWidget($_smarty_tpl->tpl_vars['WIDGET']->value,$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewHeaderTitle.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="detailViewInfo row"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="col-md-12 <?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']) || !empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'])) {?> details <?php }?>"><form id="detailView" data-name-fields='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());?>
' method="POST"><?php if (!empty($_smarty_tpl->tpl_vars['PICKLIST_DEPENDENCY_DATASOURCE']->value)) {?><input type="hidden" name="picklistDependency" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_DEPENDENCY_DATASOURCE']->value);?>
"><?php }?><div class="contents">

<?php }
}
