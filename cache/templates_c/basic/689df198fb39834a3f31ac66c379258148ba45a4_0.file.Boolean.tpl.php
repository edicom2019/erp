<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:30:20
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/List/Field/Boolean.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d87c66ec88_44067238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689df198fb39834a3f31ac66c379258148ba45a4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/List/Field/Boolean.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d87c66ec88_44067238 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
if (isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'])) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', '');
}?><div class="tpl-List-Field-Boolean boolenSearchField"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="select2noactive select2 listSearchContributor" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == 1) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == '0') {?> selected<?php }?>><?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div>
<?php }
}
