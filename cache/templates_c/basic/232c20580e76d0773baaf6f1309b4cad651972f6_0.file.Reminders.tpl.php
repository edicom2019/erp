<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:16
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Calendar\Reminders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb7454d067_79504192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232c20580e76d0773baaf6f1309b4cad651972f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Calendar\\Reminders.tpl',
      1 => 1551092130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb7454d067_79504192 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="remindersContent"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORDS']->value, 'RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->_assignInScope('START_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('date_start'));
$_smarty_tpl->_assignInScope('START_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_start'));
$_smarty_tpl->_assignInScope('END_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('due_date'));
$_smarty_tpl->_assignInScope('END_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_end'));
$_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['RECORD']->value->getId());
?><div class="js-toggle-panel c-panel picklistCBr_Calendar_activitytype_<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));?>
" data-js="click" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><div class="card-header p-2 d-flex justify-content-between picklistCBg_Calendar_activitytype_<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));?>
"><?php $_smarty_tpl->_assignInScope('ACTIVITY_TYPE', $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));
?><div class="float-left"><a target="_blank" href="index.php?module=Calendar&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Task') {?><span class="far fa-check-square fa-lg"></span><?php } elseif ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Call') {?><span class="fas fa-phone fa-lg" data-fa-transform="rotate--260"></span><?php } else { ?><span class="fas fa-user fa-lg"></span><?php }?><span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject');?>
</span></a></div><div class="float-right ml-1"><button class="btn btn-success btn-sm  showModal" data-url="index.php?module=Calendar&view=ActivityStateModal&trigger=Reminders&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><span class="fas fa-check"></span></button></div></div><div class="card-body small p-2"><div><?php echo \App\Language::translate('Start Date & Time',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['START_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['START_TIME']->value),$_smarty_tpl->tpl_vars['RECORD']->value->get('allday'));?>
</strong></div><div><?php echo \App\Language::translate('Due Date',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['END_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['END_TIME']->value),$_smarty_tpl->tpl_vars['RECORD']->value->get('allday'));?>
</strong></div><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitystatus') != '') {?><div><?php echo \App\Language::translate('Status',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitystatus');?>
</strong></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') != '') {?><div><?php echo \App\Language::translate('FL_RELATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('link');?>
</strong><?php if ($_smarty_tpl->tpl_vars['PERMISSION_TO_SENDE_MAIL']->value) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('internal_mailer') == 1) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));
?><a target="_blank" class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEND_EMAIL');?>
"><span class="fas fa-envelope fa-fw"></span></a><?php } else {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getExternalUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));
if ($_smarty_tpl->tpl_vars['URLDATA']->value && $_smarty_tpl->tpl_vars['URLDATA']->value != 'mailto:?') {?><a class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"><span class="fas fa-envelope fa-fw" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"></span></a><?php }
}
}?></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('process') != '') {?><div><?php echo \App\Language::translate('FL_PROCESS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('process');?>
</strong></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend') != '') {?><div><?php echo \App\Language::translate('FL_RELATION_EXTEND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linkextend');?>
</strong><?php if ($_smarty_tpl->tpl_vars['PERMISSION_TO_SENDE_MAIL']->value) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('internal_mailer') == 1) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')),$_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend'),'Detail','new'));
?><a target="_blank" class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
"><span class="fas fa-envelope fa-fw" title="<?php echo \App\Language::translate('LBL_SEND_EMAIL');?>
"></span></a><?php } else {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getExternalUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')),$_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend'),'Detail','new'));
if ($_smarty_tpl->tpl_vars['URLDATA']->value && $_smarty_tpl->tpl_vars['URLDATA']->value != 'mailto:?') {?><a class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"><span class="fas fa-envelope fa-fw" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"></span></a><?php }
}
}?></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess') != '') {?><div><?php echo \App\Language::translate('FL_SUB_PROCESS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subprocess');?>
</strong></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('location') != '') {?><div><?php echo \App\Language::translate('Location',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:<strong class="ml-1"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location');?>
</strong><?php if (App\Privilege::isPermitted('OpenStreetMap')) {?><a class="float-right" href="#" data-location="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location');?>
" onclick="Vtiger_Index_Js.showLocation(this)"><span class="fas fa-map-marker-alt fa-fw" title="<?php echo \App\Language::translate('LBL_MAP');?>
"></span></a><?php }?></div><?php }?><hr/><div class="actionRow text-center" role="toolbar"><a class="btn btn-success btn-sm showModal" role="button" href="#" data-url="index.php?module=Calendar&view=ActivityStateModal&trigger=Reminders&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><span class="fas fa-check" title="<?php echo \App\Language::translate('LBL_SET_RECORD_STATUS');?>
"></span></a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="15m" title="<?php echo \App\Language::translate('LBL_REMAIND_MINS','Events');?>
">15<?php echo \App\Language::translate('LBL_M',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="30m" title="<?php echo \App\Language::translate('LBL_REMAIND_MINS','Events');?>
">30<?php echo \App\Language::translate('LBL_M',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="1h" title="<?php echo \App\Language::translate('LBL_REMAIND_HOURS','Events');?>
">1<?php echo \App\Language::translate('LBL_H',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="2h" title="<?php echo \App\Language::translate('LBL_REMAIND_HOURS','Events');?>
">2<?php echo \App\Language::translate('LBL_H',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="6h" title="<?php echo \App\Language::translate('LBL_REMAIND_HOURS','Events');?>
">6<?php echo \App\Language::translate('LBL_H',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="btn btn-dark btn-sm reminderPostpone" role="button" href="#" data-time="1d" title="<?php echo \App\Language::translate('LBL_REMAIND_DAYS','Events');?>
">1<?php echo \App\Language::translate('LBL_D',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div></div><?php
}
} else {
?>
<div class="alert alert-info"><?php echo \App\Language::translate('LBL_NO_CURRENT_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div>
<?php }
}
