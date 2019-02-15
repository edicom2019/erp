<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:30:09
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OrdreNonAffectes/ListViewPreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d871933486_13615036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0584416c3acceba1fb2466553494b480ab354e92' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OrdreNonAffectes/ListViewPreProcess.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d871933486_13615036 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Header.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bodyContents"><div class="mainContainer"><div class="o-breadcrumb js-breadcrumb widget_header mb-2 d-flex justify-content-between px-2" data-js="container"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><a class="btn btn-outline-dark d-md-none my-auto o-breadcrumb__actions-btn js-breadcrumb__actions-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="my-auto o-breadcrumb__actions js-breadcrumb__actions" id="o-view-actions__container"><div class="float-right btn-toolbar btn-group"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewHeader','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><div class="contentsDiv">
<?php }
}
