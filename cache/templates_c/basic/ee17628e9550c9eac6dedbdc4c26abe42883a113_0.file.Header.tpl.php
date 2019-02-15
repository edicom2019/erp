<?php
/* Smarty version 3.1.31, created on 2019-02-11 14:18:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c618423bf5fd8_50778107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee17628e9550c9eac6dedbdc4c26abe42883a113' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Header.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c618423bf5fd8_50778107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;?>
"><head><title><?php echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;?>
</title><link REL="SHORTCUT ICON" HREF="<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="robots" content="noindex,nofollow" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STYLES']->value, 'cssModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cssModel']->value) {
?><link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
" /><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_SCRIPTS']->value, 'jsModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<!--[if IE]><?php echo '<script'; ?>
 type="text/javascript" src="public_html/libraries/html5shiv/html5shiv.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="public_html/libraries/respond.js/dist/respond.min.js"><?php echo '</script'; ?>
><![endif]--><?php $_smarty_tpl->_assignInScope('HEAD_LOCKS', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getHeadLocks());
if ($_smarty_tpl->tpl_vars['HEAD_LOCKS']->value) {
echo '<script'; ?>
 type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['HEAD_LOCKS']->value;
echo '</script'; ?>
><?php }
echo '<script'; ?>
 type="text/javascript">var CONFIG = <?php echo \App\Config::getJsEnv();?>
;var LANG = <?php echo \App\Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
;<?php echo '</script'; ?>
><?php if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer(\App\Debuger::getJavascriptPath())->renderHead();
}?></head><body class="<?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>user-info--active<?php }?>" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" data-skinpath="<?php echo $_smarty_tpl->tpl_vars['SKIN_PATH']->value;?>
" data-layoutpath="<?php echo $_smarty_tpl->tpl_vars['LAYOUT_PATH']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getBodyLocks();?>
><div id="configuration"><input type="hidden" id="currencyGroupingPattern" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_pattern');?>
" /><input type="hidden" id="truncateTrailingZeros" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('truncate_trailing_zeros');?>
" /><input type="hidden" id="backgroundClosingModal" value="<?php echo \AppConfig::main('backgroundClosingModal');?>
" /><input type="hidden" id="gsAutocomplete" value="<?php echo AppConfig::search('GLOBAL_SEARCH_AUTOCOMPLETE');?>
" /><input type="hidden" id="gsMinLength" value="<?php echo AppConfig::search('GLOBAL_SEARCH_AUTOCOMPLETE_MIN_LENGTH');?>
" /><input type="hidden" id="gsAmountResponse" value="<?php echo AppConfig::search('GLOBAL_SEARCH_AUTOCOMPLETE_LIMIT');?>
" /><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><input type="hidden" id="sounds" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(AppConfig::sounds()));?>
" /><input type="hidden" id="intervalForNotificationNumberCheck" value="<?php echo AppConfig::performance('INTERVAL_FOR_NOTIFICATION_NUMBER_CHECK');?>
" /></div><div id="page"><?php if ($_smarty_tpl->tpl_vars['SHOW_BODY_HEADER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Body.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
