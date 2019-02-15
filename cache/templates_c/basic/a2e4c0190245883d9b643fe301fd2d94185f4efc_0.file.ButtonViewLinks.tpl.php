<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:05
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ButtonViewLinks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0fd2a82c0_64919397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e4c0190245883d9b643fe301fd2d94185f4efc' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ButtonViewLinks.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0fd2a82c0_64919397 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
if (!$_smarty_tpl->tpl_vars['BTN_ICON']->value && !$_smarty_tpl->tpl_vars['TEXT_HOLDER']->value) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_assignInScope('LINK_PARAMS', vtlib\Functions::getQueryParams($_smarty_tpl->tpl_vars['LINK']->value->getUrl()));
if (\App\Request::_getModule() == $_smarty_tpl->tpl_vars['LINK_PARAMS']->value['module'] && \App\Request::_get('view') == $_smarty_tpl->tpl_vars['LINK_PARAMS']->value['view']) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', $_smarty_tpl->tpl_vars['LINK']->value->getLabel());
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon') != '') {
$_smarty_tpl->_assignInScope('BTN_ICON', $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon'));
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="d-inline-block <?php if (isset($_smarty_tpl->tpl_vars['CLASS']->value)) {
echo $_smarty_tpl->tpl_vars['CLASS']->value;
}?>"><button class="btn <?php if (isset($_smarty_tpl->tpl_vars['BTN_CLASS']->value)) {
echo $_smarty_tpl->tpl_vars['BTN_CLASS']->value;
} else { ?>btn-light<?php }?> dropdown-toggle" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['BTN_ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BTN_ICON']->value;?>
"></span><?php } else { ?><span class="fas fa-list"></span><?php }?>&nbsp;<span class="textHolder"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEXT_HOLDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
if ($_smarty_tpl->tpl_vars['LINK_TYPE']->value && $_smarty_tpl->tpl_vars['LINK_TYPE']->value != $_smarty_tpl->tpl_vars['LINK']->value->getType()) {?><li class="dropdown-divider"></li><?php }
$_smarty_tpl->_assignInScope('LINK_TYPE', $_smarty_tpl->tpl_vars['LINK']->value->getType());
$_smarty_tpl->_assignInScope('LINK_URL', $_smarty_tpl->tpl_vars['LINK']->value->getUrl());
?><a class="dropdown-item quickLinks <?php echo $_smarty_tpl->tpl_vars['LINK']->value->getClassName();?>
"<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata') != '') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'), 'DATA', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['DATA']->value) {
echo ' ';?>
data-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
echo ' ';
if ($_smarty_tpl->tpl_vars['LINK_URL']->value && stripos($_smarty_tpl->tpl_vars['LINK_URL']->value,'javascript:') === false) {?>href="<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"<?php } elseif ($_smarty_tpl->tpl_vars['LINK_URL']->value) {?>href="#"onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK_URL']->value,strlen("javascript:"));?>
'<?php } else { ?>href="#"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl')) {
echo ' ';?>
data-url="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl');?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('style')) {
echo ' ';?>
style="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('style');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon');?>
"></span>&nbsp;&nbsp;<?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><?php }
}
}
