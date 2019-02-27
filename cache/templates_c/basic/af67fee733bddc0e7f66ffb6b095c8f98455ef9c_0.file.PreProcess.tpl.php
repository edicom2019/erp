<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:35
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Detail\PreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbc37816f6_39215518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af67fee733bddc0e7f66ffb6b095c8f98455ef9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Detail\\PreProcess.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbc37816f6_39215518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Header.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bodyContents tpl-Detail-PreProcess"><div class="mainContainer"><div class="contentsDiv"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
