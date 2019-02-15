<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:31:17
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/EditViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8b59cc847_76481004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e663bbb54894d7bde021abd2027c7ca35ab95c' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/EditViewActions.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8b59cc847_76481004 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success u-mr-5px" type="submit" name="mode" value="updateBordereau"><span class="fas fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit" name="mode" value="genererPDF" formtarget="_blank"><span class="fa fa-print"></span><strong>Generer PDF</strong></button></div>
<?php }
}
