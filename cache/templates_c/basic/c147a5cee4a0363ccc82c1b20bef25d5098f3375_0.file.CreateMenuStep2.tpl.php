<?php
/* Smarty version 3.1.31, created on 2019-02-14 10:55:34
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/CreateMenuStep2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6549266dd086_02287290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c147a5cee4a0363ccc82c1b20bef25d5098f3375' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/CreateMenuStep2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6549266dd086_02287290 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Menu-CreateMenuStep2 modal fade" tabindex="-1">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><span class="fa fa-plus u-mr-5px"></span><?php echo \App\Language::translate('LBL_CREATING_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $_smarty_tpl->_assignInScope('MENU_TYPES', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMenuTypes());
?>
				<?php $_smarty_tpl->_assignInScope('MENU_TYPE', $_smarty_tpl->tpl_vars['MENU_TYPES']->value[$_smarty_tpl->tpl_vars['TYPE']->value]);
?>
				<form class="form-horizontal">
					<input type="hidden" name="type" id="menuType" value="<?php echo $_smarty_tpl->tpl_vars['MENU_TYPE']->value;?>
" />
					<div class="form-group row">
						<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_TYPE_OF_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-md-7 form-control-plaintext"><?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['MENU_TYPE']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
					</div>
					<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('types/').($_smarty_tpl->tpl_vars['MENU_TYPE']->value)).('.tpl'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</form>
			</div>
			<div class="modal-footer">
				<div class="float-right cancelLinkContainer">
					<button class="btn btn-success saveButton"><strong><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_ADD_NEW_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
					<button class="btn btn-warning" type="reset"
							data-dismiss="modal"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
