<?php
/* Smarty version 3.1.31, created on 2019-02-14 14:13:18
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/HideBlocks/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c65777e4ad899_14584654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e127c2f84ffdf06b0aa360091ad140f37ed8cea' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/HideBlocks/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65777e4ad899_14584654 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-HideBlocks-EditView targetFieldsTableContainer"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_HIDEBLOCKS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><form method="post" action="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parent=Settings&view=Conditions"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><div class="listViewEntriesDiv u-overflow-scroll-xs-down contents-bottomscroll" style="overflow-x: visible !important;"><div class="bottomscroll-div table-responsive"><table class="table table-bordered" width="100%" name="targetModuleFields"><tr class="blockHeader"><th class="blockHeader" colspan="2"><?php if ($_smarty_tpl->tpl_vars['MODE']->value) {
echo \App\Language::translate('LBL_EDIT_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate('LBL_NEW_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></th></tr><tr name="fieldHeaders"><td><b><?php echo \App\Language::translate('LBL_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td><td><div class="col-md-5"><select class="chzn-select form-control" name="blockid"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'MODULES', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['MODULES']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['BLOCK_ID']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected=""<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['blocklabel'],$_smarty_tpl->tpl_vars['item']->value['module']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></td></tr><tr name="fieldHeaders"><td><b><?php echo \App\Language::translate('LBL_ENABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td><td><div class="col-md-5"><input type="checkbox" name="enabled" value="true" <?php if ($_smarty_tpl->tpl_vars['ENABLED']->value) {?>checked<?php }?> /></div></td></tr><tr name="fieldHeaders"><td><b><?php echo \App\Language::translate('LBL_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td><td class="col-md-10"><div class="col-md-5"><select multiple class="chzn-select form-control" name="views[]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIEWS']->value, 'LABEL', false, 'VIEW_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VIEW_NAME']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['VIEW_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_VIEWS']->value)) {?>selected=""<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></td></tr></tbody></table></div></div><br /><div class=""><div class="float-right"><button class="btn btn-success" type="submit"><strong><span class="fa fa-caret-right u-mr-5px"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-warning text-white" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div class="clearfix"></div></div></form></div>
<?php }
}
