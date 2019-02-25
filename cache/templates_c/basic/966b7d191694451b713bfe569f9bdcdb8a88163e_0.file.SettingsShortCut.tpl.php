<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:18
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Settings\Vtiger\SettingsShortCut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdce69aac0_76387812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '966b7d191694451b713bfe569f9bdcdb8a88163e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdce69aac0_76387812 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-lg-12 col-xl-3 mx-2 mb-3 p-3 contentsBackground well u-cursor-pointer moduleBlock" id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
"><div class="d-flex align-items-center"><h5 class="themeTextColor col-6 px-0 mb-0 text-left"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),Vtiger_Menu_Model::getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</h5><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo \App\Language::translate('LBL_REMOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="Close" type="button" class="unpin close col-6 px-0 text-right"><span class="fas fa-times"></span></button></div><div><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),Vtiger_Menu_Model::getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</div></div>	
<?php }
}
