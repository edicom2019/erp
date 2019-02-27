<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:12
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Users\Login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb7033cd13_23343049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a142ff0d015287f59abe4204a721cf554738ed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Users\\Login.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb7033cd13_23343049 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('_DefaultLoginTemplate', \App\Layout::getTemplatePath('Login.Default.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplate', \App\Layout::getTemplatePath('Login.Custom.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplateFullPath', "layouts/basic/".((string)$_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value));
?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php } else { ?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
}
