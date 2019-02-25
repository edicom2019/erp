<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\menu\SubMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb7272e1f7_14571376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78f1c755e87a9e016dc86ac79ce9d54b930f5ce1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\menu\\SubMenu.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb7272e1f7_14571376 (Smarty_Internal_Template $_smarty_tpl) {
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
