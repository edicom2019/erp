<?php
/* Smarty version 3.1.31, created on 2019-02-14 11:02:31
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/fields/Hotkey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c654ac75581c4_97234813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54930ad041780d85af1952644df00e33d57c4c98' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/fields/Hotkey.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c654ac75581c4_97234813 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_HOTKEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<div class="input-group">
			<input name="hotkey" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('hotkey');
}?>" />
			<div class="input-group-append">
				<a class="btn btn-default testBtn" role="button" data-toggle="button"><?php echo \App\Language::translate('LBL_TEST_IT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
			</div>
			<a class="input-group-append js-popover-tooltip" data-js="popover" target="_blank" href="https://github.com/ccampbell/mousetrap" rel="noreferrer" data-toggle="popover"
			   data-content="<?php echo \App\Language::translate('LBL_MORE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
				<div class="input-group-text">
					<span class="fas fa-info-circle"></span>
				</div>
			</a>
		</div>
	</div>
</div>
<?php }
}
