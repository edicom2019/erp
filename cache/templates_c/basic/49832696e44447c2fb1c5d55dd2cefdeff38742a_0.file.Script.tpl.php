<?php
/* Smarty version 3.1.31, created on 2019-02-14 11:02:31
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/types/Script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c654ac754e9c4_11698857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49832696e44447c2fb1c5d55dd2cefdeff38742a' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/types/Script.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c654ac754e9c4_11698857 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<input name="label" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');
}?>" data-validation-engine="validate[required]" />
	</div>
</div>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_JAVASCRIPT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<textarea name="dataurl" class="form-control"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('dataurl');
} else { ?>javascript:<?php }?></textarea>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('fields/Hotkey.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

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
