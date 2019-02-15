<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0facb1781_23528523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15069b39869c39e5508c77dc2490a3e04d7ad2d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Menu.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0facb1781_23528523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="tpl-Menu js-menu__content c-menu__content" id="submenu-0" data-js="container" aria-label="<?php echo \App\Language::translate("LBL_MAIN_MENU");?>
" data-js="keydown | focus"><ul class="nav flex-column modulesList"><?php $_smarty_tpl->_assignInScope('PRIVILEGESMODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());
$_smarty_tpl->_assignInScope('TABINDEX', 0);
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
</ul></nav>
<?php }
}
