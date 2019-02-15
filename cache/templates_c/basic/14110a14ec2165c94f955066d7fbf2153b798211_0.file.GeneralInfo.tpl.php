<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/GeneralInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fdeaf97_14908470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14110a14ec2165c94f955066d7fbf2153b798211' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/GeneralInfo.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fdeaf97_14908470 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><div class="c-detail-widget u-mb-13px c-detail-widget--general-info js-widget-general-info" data-js="edit/save"><div class="c-detail-widget__header"><h5 class="mb-0 py-2"> <?php echo \App\Language::translate('LBL_RECORD_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><hr /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/Widget/GeneralInfoContent.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
