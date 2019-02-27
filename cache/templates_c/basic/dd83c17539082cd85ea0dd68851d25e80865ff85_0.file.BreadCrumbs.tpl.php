<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\BreadCrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb72bb6e76_19997279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd83c17539082cd85ea0dd68851d25e80865ff85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\BreadCrumbs.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb72bb6e76_19997279 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (AppConfig::main('breadcrumbs') == 'true') {
if (isset($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value)) {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value));
} else {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs());
}
$_smarty_tpl->_assignInScope('HOMEICON', 'userIcon-Home');
if ($_smarty_tpl->tpl_vars['BREADCRUMBS']->value) {?><ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="<?php echo AppConfig::main('site_URL');?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['HOMEICON']->value;?>
" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_HOME');?>
</span></a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'item', true, 'key', 'breadcrumbs', array (
));
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_15_saved = $_smarty_tpl->tpl_vars['item'];
if (isset($_smarty_tpl->tpl_vars['item']->value['url'])) {?><li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li><?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?><li class="breadcrumb-item active js-text-content" data-js="text" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li><?php } else { ?><li class="breadcrumb-item"><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li><?php }
$_smarty_tpl->_assignInScope('ITEM_PREV', $_smarty_tpl->tpl_vars['item']->value['name']);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_15_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value) && $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value == 'Settings:ModuleManager') {?><div class="js-popover-tooltip ml-2" data-js="popover" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }
if ($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value == 'Settings:PDF') {?><div class="js-popover-tooltip ml-2" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_PDF_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?></ol><?php }
}
}
}
