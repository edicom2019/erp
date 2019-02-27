<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:48
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Acomptes\EditViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdec06a854_53502192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '711b0b9355a3bf9aa9891aa3e6d07094c82769c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Acomptes\\EditViewActions.tpl',
      1 => 1549878570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdec06a854_53502192 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success u-mr-5px" type="submit" name="mode" value="updateBordereau"><span class="fas fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit" name="mode" value="genererPDF" formtarget="_blank"><span class="fa fa-print"></span><strong>Generer PDF</strong></button></div>
<?php }
}
