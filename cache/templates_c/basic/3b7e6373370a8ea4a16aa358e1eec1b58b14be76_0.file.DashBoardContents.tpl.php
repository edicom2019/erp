<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/dashboards/DashBoardContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0faec2115_29343669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b7e6373370a8ea4a16aa358e1eec1b58b14be76' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/dashboards/DashBoardContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0faec2115_29343669 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-DashBoardContents"><div class="grid-stack"><?php $_smarty_tpl->_assignInScope('COLUMNS', 3);
$_smarty_tpl->_assignInScope('ROW', 0);
$_smarty_tpl->_assignInScope('COLCOUNT', 0);
$_smarty_tpl->_assignInScope('SPECIAL_WIDTGETS', array('ChartFilter','MiniList','Notebook','Rss'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, NULL, 'count', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']++;
if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('active') == 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('WIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'));
if (in_array($_smarty_tpl->tpl_vars['WIDGET']->value->getName(),$_smarty_tpl->tpl_vars['SPECIAL_WIDTGETS']->value)) {
$_smarty_tpl->_assignInScope('WIDGETDOMID', ($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')));
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 2) {
$_smarty_tpl->_assignInScope('ROW', 4);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 5) {
$_smarty_tpl->_assignInScope('ROW', 8);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 8) {
$_smarty_tpl->_assignInScope('ROW', 12);
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 1 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 4 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 7) {
$_smarty_tpl->_assignInScope('COLCOUNT', 4);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 2 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 5 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 8) {
$_smarty_tpl->_assignInScope('COLCOUNT', 8);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%3 == 0) {
$_smarty_tpl->_assignInScope('COLCOUNT', 0);
}?><div class="grid-stack-item" data-gs-y="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" data-gs-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
"data-gs-x="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
"data-gs-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><div id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) != 0) {?> <?php }?>class="grid-stack-item-content dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" data-cache="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('cache');?>
"data-loader="widgetLoader"></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<input type="hidden" id="row" value="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
"/><input type="hidden" id="col" value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
"/></div></div></div>

<?php }
}
