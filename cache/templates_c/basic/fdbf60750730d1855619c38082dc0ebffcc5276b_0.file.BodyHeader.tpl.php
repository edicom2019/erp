<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/BodyHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0fade83d9_20173021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdbf60750730d1855619c38082dc0ebffcc5276b' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/BodyHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0fade83d9_20173021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('count', 0);
?><header class="tpl-BodyHeader navbar navbar-expand-md navbar-dark fixed-top px-2 js-header c-header" data-js="height"><div class="o-navbar__left d-inline-flex"><div class="rightHeaderBtnMenu"><div class="quickAction"><a class="btn btn-light c-header__btn ml-0 js-sidebar-btn" role="button" href="#" data-js="click" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bars fa-fw" title="<?php echo \App\Language::translate('LBL_MENU');?>
"></span></a></div></div><?php if (AppConfig::performance('GLOBAL_SEARCH')) {?><div class="js-global-search__input o-global-search__input o-global-search__input--desktop input-group input-group-sm d-none d-xl-flex" data-js="container"><div class="input-group-prepend select2HeaderWidth"><select class="select2 basicSearchModulesList form-control" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE');?>
" data-dropdown-auto-width="true"><option value="-"><?php echo \App\Language::translate('LBL_ALL_RECORDS');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'SEARCHABLE_MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
if (isset($_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value) && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value == $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value !== 'All') {?><option value="<?php echo $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value;?>
"selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value,$_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value);?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value,$_smarty_tpl->tpl_vars['SEARCHABLE_MODULE']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><input id="global-search-__value" type="text" class="form-control js-global-search__value o-global-search__value" title="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
"placeholder="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
" results="10"data-operator="<?php echo AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR');?>
"data-js="keypress | value | autocomplete"/><div class="input-group-append bg-white rounded-right"><button class="btn btn-outline-dark border-0 h-100 searchIcon" type="button"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button><?php if (AppConfig::search('GLOBAL_SEARCH_OPERATOR_SELECT')) {?><div class="btn-group"><a class="btn btn-outline-dark border-bottom-0 border-top-0 dropdown-toggle rounded-0 border-left border-right" id="globalSearchOperator" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-crosshairs fa-fw" title="<?php echo \App\Language::translate('LBL_SPECIAL_OPTIONS');?>
"></span></a><ul class="dropdown-menu js-global-search-operator" aria-labelledby="globalSearchOperator" data-js="click"><li class="<?php if (AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR') === 'FulltextBegin') {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="FulltextBegin"><?php echo \App\Language::translate('LBL_FULLTEXT_BEGIN');?>
</li><li class="<?php if (AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR') === 'FulltextWord') {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="FulltextWord"><?php echo \App\Language::translate('LBL_FULLTEXT_WORD');?>
</li><li class="<?php if (AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR') === 'Contain') {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="Contain"><?php echo \App\Language::translate('LBL_CONTAINS');?>
</li><li class="<?php if (AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR') === 'Begin') {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="Begin"><?php echo \App\Language::translate('LBL_STARTS_WITH');?>
</li><li class="<?php if (AppConfig::search('GLOBAL_SEARCH_DEFAULT_OPERATOR') === 'End') {?>active<?php }?> dropdown-item u-cursor-pointer"href="#" data-operator="End"><?php echo \App\Language::translate('LBL_ENDS_WITH');?>
</li></ul></div><?php }?><button class="btn btn-outline-dark border-0 h-100 globalSearch" title="<?php echo \App\Language::translate('LBL_ADVANCE_SEARCH');?>
" type="button"><span class="fa fa-th-large fa-fw"></span></button></div></div><div class="searchMenu d-xl-none"><div class="searchMenuBtn"><div class="quickAction"><a class="btn btn-light c-header__btn" href="#" role="button" aria-expanded="false" aria-controls="o-search-menu__container"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a></div></div><div class="o-search-menu__container" id="o-search-menu__container"><div class="input-group mb-3"><div class="form-control select2WithButtonWidth"><select class="select2 basicSearchModulesList" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE');?>
"><option value="-" class="globalSearch_module_All"><?php echo \App\Language::translate('LBL_ALL_RECORDS');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
if (isset($_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value) && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_NAME']->value && $_smarty_tpl->tpl_vars['SEARCHED_MODULE']->value !== 'All') {?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="input-group-append"><button class="btn btn-light globalSearch" title="<?php echo \App\Language::translate('LBL_ADVANCE_SEARCH');?>
" type="button"><span class="fas fa-th-large"></span></button></div></div><div class="input-group mb-3 js-global-search__input o-global-search__input" data-js="container"><input id="global-search-__value--mobile type="text" class="form-control js-global-search__value o-global-search__value" title="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
"placeholder="<?php echo \App\Language::translate('LBL_GLOBAL_SEARCH');?>
" results="10" data-js="keypress | value | autocomplete"/><div class="input-group-append"><button class="btn btn-light searchIcon" type="button"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button></div></div><div class="searchMenuBtn"><a class="btn btn-light c-header__btn float-right" href="#" role="button" aria-expanded="false" aria-controls="o-search-menu__container"><span class="fas fa-times fa-fw" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"></span><span><?php echo \App\Language::translate('LBL_CLOSE');?>
</span></a></div></div></div><?php }?></div><div class="o-navbar__right ml-auto d-inline-flex flex-sm-nowrap"><?php if (!Settings_ModuleManager_Library_Model::checkLibrary('roundcube')) {
$_smarty_tpl->_assignInScope('CONFIG', Settings_Mail_Config_Model::getConfig('mailIcon'));
if ($_smarty_tpl->tpl_vars['CONFIG']->value['showMailIcon'] == 'true' && App\Privilege::isPermitted('OSSMail')) {
$_smarty_tpl->_assignInScope('AUTOLOGINUSERS', OSSMail_Autologin_Model::getAutologinUsers());
if (count($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value) > 0) {
$_smarty_tpl->_assignInScope('MAIN_MAIL', OSSMail_Module_Model::getDefaultMailAccount($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value));
?><div class="c-header__btn__container bg-white rounded js-header__btn--mail"<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['showNumberUnreadEmails'] == 'true') {?>data-numberunreademails="true"data-interval="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['timeCheckingMail'];?>
"<?php }?>><?php if (count($_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value) == 1) {?><a class="c-header__btn btn btn-outline-dark border-0" title="<?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['username'];?>
"href="index.php?module=OSSMail&view=Index"><div class="d-none d-xxl-block"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];?>
<span class="mail_user_name"><?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['username'];?>
</span><span data-id="<?php echo $_smarty_tpl->tpl_vars['MAIN_MAIL']->value['rcuser_id'];?>
" class="noMails"></span></div><div class="d-xxl-none"><span class="fas fa-inbox fa-fw" title="<?php echo \App\Language::translate('LBL_EMAIL');?>
"></span></div></a><?php } elseif ($_smarty_tpl->tpl_vars['CONFIG']->value['showMailAccounts'] == 'true') {?><div class="d-none d-xxl-block"><select id="mail-select" class="form-control-sm" title="<?php echo \App\Language::translate('LBL_SEARCH_MODULE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value['active']) {?>selected<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"data-nomail="" class="noMails"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="o-action-menu__item d-xxl-none dropdown"><a class="c-header__btn btn btn-outline-dark border-0 dropdown-toggle" id="show-mail-list" data-toggle="dropdown" data-boundary="window" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-inbox fa-fw" title="<?php echo \App\Language::translate('LBL_EMAIL');?>
"></span></a><ul class="dropdown-menu js-mail-list" aria-labelledby="show-mail-list" role="list" data-js="click"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTOLOGINUSERS']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><li value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-nomail=""class="dropdown-item noMails js-mail-link" data-js="click"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['username'];?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><?php }?></div><?php }
}
}
if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value === 'Settings') {?><div class="mr-xxl-4"><a class="btn btn-light c-header__btn ml-2 js-popover-tooltip" role="button" href="https://yetiforce.shop" data-content="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"target="_blank"><span class="fas fa-shopping-cart fa-fw" title="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="btn btn-light c-header__btn ml-2 js-popover-tooltip" role="button" href="https://yetiforce.shop/#support" data-content="<?php echo \App\Language::translate('LBL_YETIFORCE_ASSISTANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"target="_blank"><span class="far fa-life-ring fa-fw" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ASSISTANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="btn btn-light c-header__btn ml-2 js-popover-tooltip" role="button" href="https://github.com/YetiForceCompany/YetiForceCRM/issues" data-content="<?php echo \App\Language::translate('LBL_YETIFORCE_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"target="_blank"><span class="fas fa-bug fa-fw" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></div><?php }?><nav class="actionMenu" aria-label="<?php echo \App\Language::translate("QUICK_ACCESS_MENU");?>
"><a class="btn btn-light c-header__btn ml-2 c-header__btn--mobile js-quick-action-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-action-menu__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="o-action-menu__container" id="o-action-menu__container"><?php $_smarty_tpl->_assignInScope('QUICKCREATE_MODULES', Vtiger_Module_Model::getQuickCreateModules(true));
if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_MODULES']->value)) {?><div class="o-action-menu__item commonActionsContainer"><a class="c-header__btn ml-2 btn-light btn js-popover-tooltip dropdownMenu" role="button" data-js="popover" data-toggle="modal" data-target="#quickCreateModules" data-placement="bottom" data-content="<?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
"href="#"><span class="fas fa-plus fa-fw" title="<?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
"></span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
</span></a><div class="quickCreateModules modal" id="quickCreateModules" tabindex="-1" role="dialog" aria-labelledby="c-quick-create__title" aria-hidden="true"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-tile" id="c-quick-create__title"><span class="fas fa-plus fa-fw mr-1"></span><?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_MODULES']->value, 'MODULEMODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['MODULEMODEL']->value) {
$_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['MODULEMODEL']->value->isQuickCreateSupported());
$_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getSingularLabelKey());
if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {
$_smarty_tpl->_assignInScope('singularLabel', 'LBL_EVENT_OR_TASK');
}
if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {
if ($_smarty_tpl->tpl_vars['count']->value%3 == 0) {?><div class="row"><?php }?><div class="col-md-4"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" class="quickCreateModule"data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getQuickCreateUrl();?>
"href="javascript:void(0)"><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 userIcon-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 mr-1"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['NAME']->value);?>
"></span><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['NAME']->value);?>
</span></a></div><?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?></div><?php }
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value%3 >= 1) {?></div><?php }?></div><div class="modal-footer"><button class="btn btn-danger btn-sm" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div></div><?php }
if (\App\Privilege::isPermitted('Notification','DetailView')) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn-light btn isBadge notificationsNotice js-popover-tooltip <?php if (AppConfig::module('Notification','AUTO_REFRESH_REMINDERS')) {?>autoRefreshing<?php }?>"role="button" data-js="popover"data-content="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
" href="#"><span class="fas fa-bell fa-fw" title="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
"> </span><span class="badge badge-dark d-none mr-1">0</span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
</span></a></div><?php }
if (isset($_smarty_tpl->tpl_vars['CHAT_ENTRIES']->value)) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn-light btn headerLinkChat js-popover-tooltip" role="button" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_CHAT');?>
" href="#"><span class="fas fa-comments fa-fw" title="<?php echo \App\Language::translate('LBL_CHAT');?>
"></span><span class="c-header__label--sm-down"> <?php echo \App\Language::translate('LBL_CHAT');?>
</span></a><div class="chatModal modal fade c-modal--custom-animation" tabindex="-1" role="dialog" aria-labelledby="c-chat-modal__title" data-timer="<?php echo AppConfig::module('Chat','REFRESH_TIME');?>
000"><div class="modal-dialog modalRightSiteBar px-0" role="document"><div class="modal-content rounded-0"><div class="modal-header"><h5 class="modal-title" id="c-chat-modal__title"><span class="fas fa-comments fa-fw mr-1"></span><?php echo \App\Language::translate('LBL_CHAT');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Items.tpl','Chat'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="modal-footer pinToDown row mx-0 d-block"><label for="c-chat-modal__message"><?php echo \App\Language::translate('LBL_MESSAGE','Notification');?>
</label><input class="form-control message" id="c-chat-modal__message" type="text"/><button type="button" class="btn btn-primary addMsg float-right mt-2"><?php echo \App\Language::translate('LBL_SEND_MESSAGE');?>
</button></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['REMINDER_ACTIVE']->value) {?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn-light btn isBadge remindersNotice js-popover-tooltip <?php if (AppConfig::module('Calendar','AUTO_REFRESH_REMINDERS')) {?>autoRefreshing<?php }?>"data-js="popover" role="button" data-content="<?php echo \App\Language::translate('LBL_REMINDER');?>
"href="#"><span class="fas fa-calendar fa-fw" title="<?php echo \App\Language::translate('LBL_REMINDER');?>
"></span><span class="badge badge-danger d-none mr-1">0</span><span class="c-header__label--sm-down"><?php echo \App\Language::translate('LBL_REMINDER');?>
</span></a></div><?php }
if (AppConfig::performance('BROWSING_HISTORY_WORKING')) {?><div class="o-action-menu__item"><div class="dropdown"><a class="c-header__btn ml-2 btn btn-light btn js-popover-tooltip dropdownMenu" id="showHistoryBtn" data-js="popover" data-toggle="dropdown" data-boundary="window" data-content="<?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
" href="#" role="button"><span class="fas fa-history fa-fw" title="<?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate('LBL_PAGES_HISTORY');?>
</span></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BrowsingHistory.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_HEADER_LINKS']->value, 'obj', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
if ($_smarty_tpl->tpl_vars['obj']->value->linktype == 'HEADERLINK') {
$_smarty_tpl->_assignInScope('HREF', '#');
$_smarty_tpl->_assignInScope('ICON_PATH', $_smarty_tpl->tpl_vars['obj']->value->getIconPath());
$_smarty_tpl->_assignInScope('LINK', $_smarty_tpl->tpl_vars['obj']->value->convertToNativeLink());
$_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['obj']->value->getHeaderIcon());
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('CHILD_LINKS', $_smarty_tpl->tpl_vars['obj']->value->getChildLinks());
if (!empty($_smarty_tpl->tpl_vars['LINK']->value)) {
$_smarty_tpl->_assignInScope('HREF', $_smarty_tpl->tpl_vars['LINK']->value);
}?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn js-popover-tooltip <?php if (strrpos($_smarty_tpl->tpl_vars['obj']->value->getClassName(),"btn-") === false) {?>btn-light <?php echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
} else {
echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
}?> <?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?>dropdownMenu<?php }?>"role="button" data-js="popover" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
"href="<?php echo $_smarty_tpl->tpl_vars['HREF']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['obj']->value->linkdata) && $_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['ICON_PATH']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['ICON_PATH']->value;?>
" alt="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><?php }?></a><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHILD_LINKS']->value, 'obj', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
if ($_smarty_tpl->tpl_vars['obj']->value->getLabel() == NULL) {?><li class="dropdown-divider"></li><?php } else {
$_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['obj']->value->getId());
$_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['obj']->value->getUrl());
$_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('onclick', '');
if (stripos($_smarty_tpl->tpl_vars['obj']->value->getUrl(),'javascript:') === 0) {
$_smarty_tpl->_assignInScope('onclick', ("onclick=").($_smarty_tpl->tpl_vars['href']->value));
$_smarty_tpl->_assignInScope('href', "javascript:;");
}?><li><a class="dropdown-item" target="<?php echo $_smarty_tpl->tpl_vars['obj']->value->target;?>
"id="menubar_item_right_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['label']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['label']->value == 'Switch to old look') {?>switchLook<?php }?>href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['onclick']->value;
if ($_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></nav></div></header>
<?php }
}
