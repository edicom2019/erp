<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\dashboards\DashBoardHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb72b72117_90507743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c9bf67eb11d83a9005d5ec8e44b17a8fa43dd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardHeader.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb72b72117_90507743 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row"><nav class="widget_header col-12 px-3 d-flex align-items-center flex-column flex-sm-row" aria-label="<?php echo \App\Language::translate("LBL_BREADCRUMB");?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE']->value;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 != 'Home') {?><div class="listViewMassActions px-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'BTN_GROUP'=>false,'CLASS'=>'buttonTextHolder'), 0, true);
?>
</div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</nav></div>
<?php }
}
