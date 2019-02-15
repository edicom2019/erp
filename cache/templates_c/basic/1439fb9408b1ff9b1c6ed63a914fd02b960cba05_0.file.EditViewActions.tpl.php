<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:30:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/EditViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d873ee4e15_64495980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1439fb9408b1ff9b1c6ed63a914fd02b960cba05' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/EditViewActions.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d873ee4e15_64495980 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value) {?><div class="tpl-EditViewActions c-form__action-panel"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value));
?><button class="btn btn-success u-mr-5px" type="submit"><span class="fas fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'editViewHeader'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }?></form><?php if (!$_smarty_tpl->tpl_vars['RECORD_ID']->value) {?><div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success u-mr-5px" id="sauvgarderAffectations"><span class="fas fa-check u-mr-5px"></span><strong>Sauvgarder</strong></button><button class="btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }?></div></div><?php }
}
