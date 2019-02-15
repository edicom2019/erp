<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:47:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642dfa72b0a1_96114191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd72edc830b4d792672e27050f2373e027dca6e3b' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642dfa72b0a1_96114191 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Workflows-Step1 workFlowContents"><form name="EditWorkflow" action="index.php" method="post" id="workflow_step1" class="form-horizontal"><input type="hidden" name="module" value="Workflows"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" class="step" value="1"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"/><input type="hidden" id="weekStartDay" data-value='<?php echo $_smarty_tpl->tpl_vars['WEEK_START_ID']->value;?>
'/><div class="u-p-1per border"><label><strong><?php echo \App\Language::translate('LBL_STEP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate('LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br/><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'edit') {?><input type='text' disabled='disabled' class="form-control" value="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
"><input type='hidden' name='module_name' value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
"><?php } else { ?><select class="select2 form-control" id="moduleName" name="module_name" required="true" data-placeholder="Select Module..."><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'TABID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><?php }?></div></div><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><input type="text" name="summary" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('summary');?>
"id="summary"/></div></div><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_SPECIFY_WHEN_TO_EXECUTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><?php $_smarty_tpl->_assignInScope('WORKFLOW_MODEL_OBJ', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getWorkflowObject());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TRIGGER_TYPES']->value, 'LABEL', false, 'LABEL_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL_ID']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><div><label><input type="radio" class="alignTop" name="execution_condition" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->executionCondition == $_smarty_tpl->tpl_vars['LABEL_ID']->value) {?> checked="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['LABEL_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getId() == '' && $_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value >= $_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value && $_smarty_tpl->tpl_vars['LABEL_ID']->value == 6) {?> disabled <?php }?> />&nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getId() == '' && $_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value >= $_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value && $_smarty_tpl->tpl_vars['LABEL_ID']->value == 6) {?><span class='alert alert-warning' style="position:relative;left:100px"><?php echo \App\Language::translate('LBL_EXCEEDING_MAXIMUM_LIMIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value;?>
</span><?php }?></label><br/></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value <= $_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value) {?><div id="scheduleBox" class="well contentsBackground u-timetable <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->executionCondition != 6) {?> d-none <?php }?>"><div class="form-row"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_RUN_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><select class="select2" id="schtypeid" name="schtypeid"><option value="1"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 1) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_HOURLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 2) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_DAILY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 3) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_WEEKLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="4"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 4) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_SPECIFIC_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="5"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 5) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_MONTHLY_BY_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><!--option value="6" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 6) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_MONTHLY_BY_WEEKDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option--><option value="7"<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid == 7) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_YEARLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class='form-row <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid != 3) {?> d-none <?php }?>'id='scheduledWeekDay'><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><?php $_smarty_tpl->_assignInScope('dayOfWeek', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofweek));
?><select multiple class="select2 col-md-6" data-validation-engine="validate[rquired,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="schdayofweek" id="schdayofweek"><option value="7" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('7',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY0','Calendar');?>
</option><option value="1" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('1',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY1','Calendar');?>
</option><option value="2" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('2',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY2','Calendar');?>
</option><option value="3" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('3',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY3','Calendar');?>
</option><option value="4" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('4',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY4','Calendar');?>
</option><option value="5" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('5',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY5','Calendar');?>
</option><option value="6" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value) && in_array('6',$_smarty_tpl->tpl_vars['dayOfWeek']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY6','Calendar');?>
</option></select></div></div><div class="form-row <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid != 5) {?> d-none <?php }?>"id="scheduleMonthByDates"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><?php $_smarty_tpl->_assignInScope('DAYS', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofmonth));
?><select multiple class="select2" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayofmonth' id='schdayofmonth'><?php
$__section_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_foo']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] <= 31; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?><option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null);?>
 <?php if (is_array($_smarty_tpl->tpl_vars['DAYS']->value) && in_array((isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null),$_smarty_tpl->tpl_vars['DAYS']->value)) {?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null);?>
</option><?php
}
}
if ($__section_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = $__section_foo_0_saved;
}
?></select></div></div><div class='form-row <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid != 4) {?> d-none <?php }?>'id='scheduleByDate'><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_CHOOSE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><div class="date w-100"><div class="input-group"><?php $_smarty_tpl->_assignInScope('specificDate', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates));
if ($_smarty_tpl->tpl_vars['specificDate']->value[0] != '') {?> <?php $_smarty_tpl->_assignInScope('specificDate1', DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['specificDate']->value[0]));
?> <?php }?><input type="text" class="dateField form-control" name="schdate" value="<?php echo $_smarty_tpl->tpl_vars['specificDate1']->value;?>
"data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><div class=" input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span></span></div></div></div></div></div><div class='form-row <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid != 6) {?> d-none <?php }?>'id='scheduleMonthByWeekDays'></div><div class='form-row my-1 <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid != 7) {?> d-none <?php }?>'id='scheduleAnually'><div class="col-md-2"><?php echo \App\Language::translate('LBL_SELECT_MONTH_AND_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-10"><div id='annualDatePicker'></div></div><div class="col-md-2"></div><div class="col-md-10 form-row"><div class="pr-2"><?php echo \App\Language::translate('LBL_SELECTED_DATES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div><input type="hidden" id=hiddenAnnualDatesvalue='<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates;?>
'/><select multiple class="select2" id='annualDates' name='schannualdates' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ANNUAL_DATES']->value, 'DATES');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATES']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-row pt-1 pb-2 px-0 <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid < 2) {?> d-none <?php }?>"id="scheduledTime"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_AT_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center" id="schtime"><div class="input-group time"><input type='text' class="clockPicker form-control" data-format='24' name='schtime' value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtime;?>
"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><div class="input-group-append"><span class="input-group-text u-cursor-pointer js-clock__btn" data-js="click"><span class="far fa-clock"></span></span></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time) {?><div class="form-row"><div class="col-md-2 d-flex align-items-center"><span class=''><?php echo \App\Language::translate('LBL_NEXT_TRIGGER_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-md-6 d-flex align-items-center"><?php echo DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time);?>
<span>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['ACTIVE_ADMIN']->value->time_zone;?>
)</span></div></div><?php }?></div><?php }?></div></div></div><br/><div class="float-right mb-4"><button class="btn btn-success mr-1" type="submit" disabled="disabled"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-danger cancelLink" type="reset" onclick="javascript:window.history.back();"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></form></div>
<?php }
}
