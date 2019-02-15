<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:05
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ButtonLink.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0fd21e8c0_92382769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cd4ff5322903a07c3a61a181174d7bfedba67f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ButtonLink.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0fd21e8c0_92382769 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-ButtonLink c-btn-link btn-group <?php if (strrpos($_smarty_tpl->tpl_vars['BUTTON_VIEW']->value,'listView') !== false && $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight') == 'narrow') {?>btn-group-sm<?php }
if (isset($_smarty_tpl->tpl_vars['CLASS']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['CLASS']->value;
}?>"><?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['LINK']->value->getLabel());
$_smarty_tpl->_assignInScope('ACTION_NAME', $_smarty_tpl->tpl_vars['LABEL']->value);
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhint') != '') {
$_smarty_tpl->_assignInScope('ACTION_NAME', $_smarty_tpl->tpl_vars['LINK']->value->get('linkhint'));
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['LINK']->value->get('linkhint'));
}
$_smarty_tpl->_assignInScope('LINK_URL', $_smarty_tpl->tpl_vars['LINK']->value->getUrl());
$_smarty_tpl->_assignInScope('BTN_MODULE', $_smarty_tpl->tpl_vars['LINK']->value->getRelatedModuleName($_smarty_tpl->tpl_vars['MODULE']->value));
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {?><a role="button"<?php } else { ?><button type="button"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['LINK']->value->isActive()) {
echo ' ';?>
disabled<?php }
echo ' ';?>
class="btn <?php if ($_smarty_tpl->tpl_vars['LINK']->value->getClassName() != '') {
if (strrpos($_smarty_tpl->tpl_vars['LINK']->value->getClassName(),"btn-") === false) {?>btn-outline-dark <?php }
echo $_smarty_tpl->tpl_vars['LINK']->value->getClassName();
} else { ?>btn-outline-dark<?php }?> <?php if ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != '1') {?> js-popover-tooltip<?php }?> <?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>showModal<?php }?> <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['BUTTON_VIEW']->value;?>
_action_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['ACTION_NAME']->value);?>
"data-js="popover"<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata') != '' && is_array($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'))) {
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
if ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != 1) {
echo ' ';?>
data-placement="<?php if (strrpos($_smarty_tpl->tpl_vars['BUTTON_VIEW']->value,'listView') !== false) {?>top<?php } else { ?>bottom<?php }?>"<?php echo ' ';?>
data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);?>
"data-target="focus hover"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {
echo ' ';?>
href="<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linktarget')) {
echo ' ';?>
target="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linktarget');?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('style')) {
echo ' ';?>
style="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('style');?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl')) {
echo ' ';?>
data-url="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl');?>
"<?php }
echo ' ';
if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>data-url="<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"<?php } else {
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkPopup')) {?>onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
', '<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linktarget')) {
echo $_smarty_tpl->tpl_vars['LINK']->value->get('linktarget');
} else { ?>_self<?php }?>'<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkPopup')) {?>, 'resizable=yes,location=no,scrollbars=yes,toolbar=no,menubar=no,status=no'<?php }?>)"<?php } else {
if ($_smarty_tpl->tpl_vars['LINK_URL']->value != '' && !$_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {
if (stripos($_smarty_tpl->tpl_vars['LINK_URL']->value,'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK_URL']->value,strlen("javascript:"));?>
;'<?php } else { ?>onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"'<?php }
}
}
}?>><?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon');?>
 <?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkimg') != '' || $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon') != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != null) {?>mr-1<?php }?>" <?php if ($_smarty_tpl->tpl_vars['LABEL']->value != 'LBL_ADD_RECORD') {?> title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);?>
" <?php }?>></span><?php }
if ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['CLASS']->value == 'c-btn-link--responsive') {?><span class="d-<?php echo $_smarty_tpl->tpl_vars['BREAKPOINT']->value;?>
-none ml-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') == 1) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);
} else {
}
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {?></a><?php } else { ?></button><?php }?></div>
<?php }
}
