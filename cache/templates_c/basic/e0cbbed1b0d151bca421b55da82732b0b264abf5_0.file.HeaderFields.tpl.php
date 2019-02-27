<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:35
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\Detail\HeaderFields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbc38fded5_20684503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0cbbed1b0d151bca421b55da82732b0b264abf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderFields.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbc38fded5_20684503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tpl-Detail-HeaderFields col-12 col-sm-12 col-md-4 pr-0"><div class="u-w-max-320px float-sm-right"><?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value, 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
?><div class="badge badge-info d-flex my-1"<?php if ($_smarty_tpl->tpl_vars['ROW']->value['action']) {?>onclick="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['action']);?>
"<?php }?>><div class="pr-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['title'];?>
</div><div class="u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['badge'];?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value, 'VALUE', false, 'LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
if (!empty($_smarty_tpl->tpl_vars['VALUE']->value['value'])) {?><div class="badge badge-info d-flex mt-1"><div class="pr-2 u-text-ellipsis"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</div><div class="u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value['value'];?>
</div></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div>
<?php }
}
