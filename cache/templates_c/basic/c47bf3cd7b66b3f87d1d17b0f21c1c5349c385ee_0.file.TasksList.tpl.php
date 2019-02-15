<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:49:49
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/TasksList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642e8d07f260_99010218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47bf3cd7b66b3f87d1d17b0f21c1c5349c385ee' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/TasksList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642e8d07f260_99010218 (Smarty_Internal_Template $_smarty_tpl) {
?>

<br /><div><table class="table table-bordered table-sm listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="10%"><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="30%"><?php echo \App\Language::translate('LBL_TASK_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_TASK_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASK_LIST']->value, 'TASK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TASK']->value) {
?><tr class="listViewEntries"><td><input type="checkbox" class="taskStatus" data-statusurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getChangeStatusUrl();?>
" <?php if ($_smarty_tpl->tpl_vars['TASK']->value->isActive()) {?> checked="" <?php }?> /></td><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TASK']->value->getTaskType()->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['TASK']->value->getName();?>
<div class="float-right actions"><span class="actionImages"><a data-url="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getEditViewUrl();?>
"><span class="fas fa-edit alignMiddle" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a>&nbsp;&nbsp;<a class="deleteTask" data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getDeleteActionUrl();?>
"><span class="fas fa-trash-alt alignMiddle" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></span></div></td><tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php if (empty($_smarty_tpl->tpl_vars['TASK_LIST']->value)) {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO_TASKS_ADDED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div>
<?php }
}
