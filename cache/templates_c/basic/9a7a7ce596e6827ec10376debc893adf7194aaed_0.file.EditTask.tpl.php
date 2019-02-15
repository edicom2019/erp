<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:01
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/EditTask.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ed56a3db9_70415873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7a7ce596e6827ec10376debc893adf7194aaed' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/EditTask.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ed56a3db9_70415873 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='modelContainer modal fade' id="addTaskContainer" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content"><div class="modal-header contentsBackground"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_ADD_TASKS_FOR_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal" id="saveTask" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="TaskAjax" /><input type="hidden" name="mode" value="save" /><input type="hidden" name="for_workflow" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_ID']->value;?>
" /><input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['TASK_ID']->value;?>
" /><input type="hidden" name="taskType" id="taskType" value="<?php echo $_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->get('tasktypename');?>
" /><div class="modal-body tabbable"><div class="form-row pb-3"><div class="col-md-2"><div class="float-left col-form-label"><?php echo \App\Language::translate('LBL_TASK_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div></div><div class="col-md-5"><input name="summary" class="form-control" data-validation-engine='validate[required]' type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_MODEL']->value->get('summary');?>
"/></div><div class="col-md-4 form-control-plaintext"><div class="float-left"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="float-left" id="taskStatus"><input type="radio" name="active" class="alignTop" <?php if ($_smarty_tpl->tpl_vars['TASK_MODEL']->value->get('status') == 1) {?> checked="" <?php }?> value="true">&nbsp;<?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;<input type="radio" name="active" class="alignTop" <?php if ($_smarty_tpl->tpl_vars['TASK_MODEL']->value->get('status') != 1) {?> checked="" <?php }?> value="false" />&nbsp;<?php echo \App\Language::translate('LBL_IN_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div><?php if (($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->trigger != null)) {
$_smarty_tpl->_assignInScope('trigger', $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->trigger);
$_smarty_tpl->_assignInScope('days', $_smarty_tpl->tpl_vars['trigger']->value['days']);
if (($_smarty_tpl->tpl_vars['days']->value < 0)) {
$_smarty_tpl->_assignInScope('days', $_smarty_tpl->tpl_vars['days']->value*-1);
$_smarty_tpl->_assignInScope('direction', 'before');
} else {
$_smarty_tpl->_assignInScope('direction', 'after');
}
}?><div class="form-row pb-3"><div class="col-md-2 checkbox d-flex align-items-center"><div class="mr-2 mb-0"><?php echo \App\Language::translate('LBL_EXECUTE_TASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><input type="checkbox" class="alignTop" name="check_select_date" <?php if ($_smarty_tpl->tpl_vars['trigger']->value != null) {?>checked<?php }?>/></div><div class="col-md-10 form-row <?php if ($_smarty_tpl->tpl_vars['trigger']->value != null) {?>show <?php } else { ?> d-none <?php }?>" id="checkSelectDateContainer"><div class="col-md-2"><input class="form-control" type="text" name="select_date_days" value="<?php echo $_smarty_tpl->tpl_vars['days']->value;?>
" data-validation-engine="validate[funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]" ></div><div class="col-form-label float-left alignMiddle"><?php echo \App\Language::translate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-2 ml-0"><select class="select2 form-control" name="select_date_direction"><option <?php if ($_smarty_tpl->tpl_vars['direction']->value == 'after') {?> selected="" <?php }?> value="after"><?php echo \App\Language::translate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['direction']->value == 'before') {?> selected="" <?php }?> value="before"><?php echo \App\Language::translate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="col-md-6 ml-0"><select class="select2" name="select_date_field"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value, 'DATETIME_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['trigger']->value['field'] == $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="taskTypeUi well bg-light px-0 px-md-1 px-lg-3"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TASK_TEMPLATE_PATH']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</div></form></div></div></div>
<?php }
}
