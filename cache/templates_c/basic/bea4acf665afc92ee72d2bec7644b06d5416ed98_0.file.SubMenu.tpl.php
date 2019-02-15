<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/menu/SubMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0face5654_53480237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea4acf665afc92ee72d2bec7644b06d5416ed98' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/menu/SubMenu.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0face5654_53480237 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['MENU']->value['childs']) && count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0) {
$_smarty_tpl->_assignInScope('MENUS', $_smarty_tpl->tpl_vars['MENU']->value['childs']);
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['active']) && $_smarty_tpl->tpl_vars['MENU']->value['active']) || $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == $_smarty_tpl->tpl_vars['MENU']->value['id']) {
$_smarty_tpl->_assignInScope('EXPAND', 'true');
} else {
$_smarty_tpl->_assignInScope('EXPAND', 'false');
}?><div class="tpl-menu-SubMenu js-submenu collapse<?php if ($_smarty_tpl->tpl_vars['EXPAND']->value == 'true') {?> show<?php }?>" id="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" data-js="bootstrap:collapse" data-parent="#submenu-<?php if (isset($_smarty_tpl->tpl_vars['MENU']->value['parent'])) {
echo $_smarty_tpl->tpl_vars['MENU']->value['parent'];
} else { ?>0<?php }?>"><ul class="nav flex-column"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENUS']->value, 'MENU', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['MENU']->value) {
$_smarty_tpl->_assignInScope('MENU_MODULE', 'Menu');
if (isset($_smarty_tpl->tpl_vars['MENU']->value['moduleName'])) {
$_smarty_tpl->_assignInScope('MENU_MODULE', $_smarty_tpl->tpl_vars['MENU']->value['moduleName']);
}
if (isset($_smarty_tpl->tpl_vars['MENU']->value['childs']) && count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0) {
$_smarty_tpl->_assignInScope('HASCHILDS', 'true');
} else {
$_smarty_tpl->_assignInScope('HASCHILDS', 'false');
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('menu/').($_smarty_tpl->tpl_vars['MENU']->value['type'])).('.tpl'),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><?php }
}
}
