<?php
/* Smarty version 3.1.31, created on 2019-02-14 10:55:34
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/types/Label.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6549266e6ac4_52431814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '097dcf7fe4b059f13528829cda8556119af890c5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/types/Label.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6549266e6ac4_52431814 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<input name="label" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');
}?>" data-validation-engine="validate[required]" />
	</div>
</div>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_ICON_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<div class="input-group">
			<input name="icon" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('icon');
}?>" />
			<span class="input-group-btn">
				<button id="selectIconButton" class="btn btn-light" title="<?php echo \App\Language::translate('LBL_SELECT_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button"><span class="fas fa-info-circle"></span></button>
			</span>
		</div>
	</div>
</div>
<?php }
}
