<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:35:06
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/AdvanceFilterExpressions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642b1adaffe2_49461016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7408fb5b5a3b5dd75343b8a4ce281d85c462ff8d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/AdvanceFilterExpressions.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642b1adaffe2_49461016 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value));
}
if (!$_smarty_tpl->tpl_vars['DATE_FILTERS']->value) {
$_smarty_tpl->_assignInScope('DATE_FILTERS', Vtiger_AdvancedFilter_Helper::getDateFilter($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
}
if (!$_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value) {
$_smarty_tpl->_assignInScope('ADVANCED_FILTER_OPTIONS', Vtiger_AdvancedFilter_Helper::getAdvancedFilterOptions());
}
if (!$_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS_BY_TYPE']->value) {
$_smarty_tpl->_assignInScope('ADVANCED_FILTER_OPTIONS_BY_TYPE', Vtiger_AdvancedFilter_Helper::getAdvancedFilterOpsByFieldType());
}
if (!$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value) {
$_smarty_tpl->_assignInScope('FIELD_EXPRESSIONS', Vtiger_AdvancedFilter_Helper::getExpressions());
}
if (!$_smarty_tpl->tpl_vars['META_VARIABLES']->value) {
$_smarty_tpl->_assignInScope('META_VARIABLES', Vtiger_AdvancedFilter_Helper::getMetaVariables());
}
$_smarty_tpl->_assignInScope('COLUMNNAME_API', 'getName');
?><div class="padding1per stepBorder"><div id="advanceFilterContainer" class="row js-conditions-container padding1per" data-js="container"><h5 class="padding-bottom1per col-md-10"><strong><?php echo \App\Language::translate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h5><div class="col-md-10" ><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div>
<?php }
}
