<?php
/* Smarty version 3.1.31, created on 2019-02-14 10:55:30
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/CreateMenuStep1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c654922ee7cd6_36295670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fecbe60458282929b07a2584a9068bdacd2a890' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/CreateMenuStep1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c654922ee7cd6_36295670 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Menu-CreateMenuStep1 modal fade" tabindex="-1">
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
				<input type="hidden" id="mode" value="step1" />
				<div class="row">
					<div class="col-md-5 mx-0"><?php echo \App\Language::translate('LBL_SELECT_TYPE_OF_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div>
					<div class="col-md-7">
						<select name="type" class="select2 type">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_TYPES']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</select>
					</div>
				</div>
				<br />
				<div class="well well-small mb-0 bg-light" style="max-height: 280px;overflow-y: scroll;">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_TYPES']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
						<h5><?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
						<p><?php echo \App\Language::translate((('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value))).('_DESC'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</div>
			</div>
			<div class="modal-footer">
				<div class="float-right cancelLinkContainer mt-0">
					<button class="btn btn-success nextButton" type="submit">
						<strong>
							<span class="fas fa-caret-right mr-1"></span>
							<?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</strong>
					</button>
					<button class="btn cancelLink btn-warning" type="reset" data-dismiss="modal">
						<span class="fas fa-times mr-1"></span>
						<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
