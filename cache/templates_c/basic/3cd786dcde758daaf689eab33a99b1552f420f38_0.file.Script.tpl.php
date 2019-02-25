<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\menu\Script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb729c32d7_94248465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd786dcde758daaf689eab33a99b1552f420f38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\menu\\Script.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb729c32d7_94248465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ICON', Vtiger_Menu_Model::getMenuIcon($_smarty_tpl->tpl_vars['MENU']->value,Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value)));
?><li class="tpl-menu-Script c-menu__item js-menu__item nav-item menuScript <?php if (!$_smarty_tpl->tpl_vars['HASCHILDS']->value) {?>hasParentMenu<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
"data-js="mouseenter mouseleave"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?>collapsed<?php }
if ($_smarty_tpl->tpl_vars['ICON']->value) {?> hasIcon<?php }
if (isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey'])) {?> hotKey<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> js-submenu-toggler<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey'])) {?> data-hotkeys="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['hotkey'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> data-toggle="collapse" data-target="#submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" role="button"<?php }?>href="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['dataurl'];?>
"<?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> aria-haspopup="true" aria-expanded="false" aria-controls="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
<span class="c-menu__item__text js-menu__item__text" data-js="class: u-white-space-n"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MENU']->value['name'],'Menu');?>
</span><?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?><span class="toggler" aria-hidden="true"><span class="fas fa-plus-circle"></span><span class="fas fa-minus-circle"></span></span><?php }?></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</li>
<?php }
}
