<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:14:06
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Reglements\EditViewActions4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdfe69c4e3_93039916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '000b78fa12ae274682dcdcf0e7015bef0f1a56d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Reglements\\EditViewActions4.tpl',
      1 => 1550847791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdfe69c4e3_93039916 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success" type="submit" name="mode" id="OrderDetails" value="OrderDetails" ><span class="fa fa-print"></span><strong>Rechercher</strong></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['REGLEMENT']->value) {?><button class="btn btn-success" type="submit" name="mode" id="OrderDetails" value="Accompte" ><span class="fa fa-print"></span><strong>Accompte</strong></button><?php }?></div>
<?php }
}
