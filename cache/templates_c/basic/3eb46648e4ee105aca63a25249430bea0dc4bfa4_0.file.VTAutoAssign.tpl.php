<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:02:48
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTAutoAssign.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c643198ede5c4_11871843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb46648e4ee105aca63a25249430bea0dc4bfa4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTAutoAssign.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c643198ede5c4_11871843 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('ENTRIES', $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->getAutoAssignEntries($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('module_name')));
?><div class="row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-5"><select class="chzn-select form-control" name="template" data-validation-engine='validate[required]'><option value=""><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ENTRIES']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getDisplayValue('field'),$_smarty_tpl->tpl_vars['ITEM']->value->getSourceModuleName());?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div>	
<?php }
}
