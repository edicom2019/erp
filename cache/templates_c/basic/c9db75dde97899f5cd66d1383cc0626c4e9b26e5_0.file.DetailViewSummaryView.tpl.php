<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewSummaryView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fe68a46_86358661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9db75dde97899f5cd66d1383cc0626c4e9b26e5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewSummaryView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fe68a46_86358661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class=""><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryTop'), 0, true);
?>
</div><div class="form-row ml-0"><?php $_smarty_tpl->_assignInScope('col1', count((array)$_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[1]));
$_smarty_tpl->_assignInScope('col2', count((array)$_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[2]));
$_smarty_tpl->_assignInScope('col3', count((array)$_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[3]));
$_smarty_tpl->_assignInScope('span', '12');
if ($_smarty_tpl->tpl_vars['col2']->value != 0) {
$_smarty_tpl->_assignInScope('span', '6');
}
if ($_smarty_tpl->tpl_vars['col3']->value != 0) {
$_smarty_tpl->_assignInScope('span', '4');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value, 'WIDGETCOLUMN');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value) {
?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 pl-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value, 'WIDGET', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->_assignInScope('FILE', ('Detail/Widget/').($_smarty_tpl->tpl_vars['WIDGET']->value['tpl']));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FILE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class=""><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryBottom'), 0, true);
?>
</div>
<?php }
}
