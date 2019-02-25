<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb725fbbe5_60300340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6a56652362cb4d846a81448a596e8d29649115' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Body.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb725fbbe5_60300340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ANNOUNCEMENTS', Vtiger_Module_Model::getInstance('Announcements'));
if ($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value->checkActive()) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Announcement.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_assignInScope('LEFTPANELHIDE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide'));
?><div class="container-fluid container-fluid-main"><div class="o-base-container js-base-container c-menu--animation <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value) {?> c-menu--open<?php }?> <?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>userInfoFooter<?php }?>"data-js="container | class: c-menu--animation"><div class="js-sidebar c-menu__container noSpaces" data-js="class: .js-expand"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyLeft.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="basePanel <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"><div class="mainBody <?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>userInfoFooter<?php }?>"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyContent.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
