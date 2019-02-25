<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\FInvoice\EditViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc43b0f990_47449799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71076aa058af839844abe22d342c5d2c97851221' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\FInvoice\\EditViewActions.tpl',
      1 => 1551092130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc43b0f990_47449799 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value));
if ($_smarty_tpl->tpl_vars['REGLEMENT']->value) {
echo '<script'; ?>
 type='text/javascript'>
				$(document).ready(function () {
					$("#save").click();
				});
			<?php echo '</script'; ?>
><input type="hidden" name="generateReglement" value="1"><?php }?><button class="btn btn-success u-mr-5px" id="save" type="submit"><span class="fas fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
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
</div></form></div></div>
<?php }
}
