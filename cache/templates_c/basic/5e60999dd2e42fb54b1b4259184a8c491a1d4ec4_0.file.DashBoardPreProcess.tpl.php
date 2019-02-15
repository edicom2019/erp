<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Home/dashboards/DashBoardPreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0fac68a45_77830405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e60999dd2e42fb54b1b4259184a8c491a1d4ec4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Home/dashboards/DashBoardPreProcess.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0fac68a45_77830405 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Header.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bodyContents"><div class="mainContainer"><div class="contentsDiv mx-md-0 dashboardContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?>
<div class="dashboardViewContainer"><?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) > 1) {?><ul class="nav nav-tabs massEditTabs selectDashboard m-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active <?php }?>" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }
if (count($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value) > 1) {?><ul class="nav nav-tabs massEditTabs selectDashboradView m-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value, 'MODULE_WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {
?><li class="nav-item" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {?> active <?php }?>" href="#" data-toggle="tab"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_WIDGET']->value,$_smarty_tpl->tpl_vars['MODULE_WIDGET']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }
}
}
