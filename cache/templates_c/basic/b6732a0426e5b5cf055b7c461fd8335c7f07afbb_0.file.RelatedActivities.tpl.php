<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedActivities.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8507a33a5_87929323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6732a0426e5b5cf055b7c461fd8335c7f07afbb' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedActivities.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8507a33a5_87929323 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/ERP/erp-equipe/erp/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?>

<div class="small"><input type="hidden" name="relatedModule" value="Calendar" /><?php $_smarty_tpl->_assignInScope('MODULE_NAME', "Calendar");
if (count($_smarty_tpl->tpl_vars['ACTIVITIES']->value) != '0') {
if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?><input type="hidden" class="totaltActivities" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('totalCount');?>
" /><input type="hidden" class="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><?php }?><input type="hidden" class="countActivities" value="<?php echo count($_smarty_tpl->tpl_vars['ACTIVITIES']->value);?>
" /><input type="hidden" class="currentPage" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIVITIES']->value, 'RECORD', false, 'KEY', 'activities', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['total'];
if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value != 1 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first'] : null)) {?><hr><?php }
$_smarty_tpl->_assignInScope('START_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('date_start'));
$_smarty_tpl->_assignInScope('START_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_start'));
$_smarty_tpl->_assignInScope('END_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('due_date'));
$_smarty_tpl->_assignInScope('END_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_end'));
$_smarty_tpl->_assignInScope('SHAREDOWNER', Vtiger_SharedOwner_UIType::getSharedOwners($_smarty_tpl->tpl_vars['RECORD']->value->get('crmid'),$_smarty_tpl->tpl_vars['RECORD']->value->getModuleName()));
?><div class="activityEntries p-1"><input type="hidden" class="activityId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activityid');?>
" /><div class="row"><span class="col-md-6"><strong title='<?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['START_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['START_TIME']->value));?>
'><span class="far fa-clock fa-fw mr-1"></span><?php echo Vtiger_Util_Helper::formatDateIntoStrings($_smarty_tpl->tpl_vars['START_DATE']->value,$_smarty_tpl->tpl_vars['START_TIME']->value);?>
</strong></span><span class="col-md-6 rightText"><strong title='<?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['END_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['END_TIME']->value));?>
'><span class="far fa-clock fa-fw mr-1"></span><?php echo Vtiger_Util_Helper::formatDateIntoStrings($_smarty_tpl->tpl_vars['END_DATE']->value,$_smarty_tpl->tpl_vars['END_TIME']->value);?>
</strong></span></div><div class="summaryViewEntries"><span class="mr-1"><?php $_smarty_tpl->_assignInScope('ACTIVITY_TYPE', $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));
if ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Task') {?><span class="far fa-check-square fa-fw"></span><?php } elseif ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Call') {?><span class="fas fa-phone fa-fw" data-fa-transform="rotate--260"></span><?php } else { ?><span class="fas fa-user fa-fw"></span><?php }?></span><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitytype');?>
&nbsp;-&nbsp;<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" ><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject');?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject');
}?>&nbsp;<?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditViewUrl();?>
" class="fieldValue"><span class="fas fa-edit fa-fw js-detail-quick-edit" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" class="fieldValue"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="fas fa-th-list fa-fw js-detail-quick-edit"></span></a><?php }?></div><div class="row"><div class="activityStatus col-md-12"><input type="hidden" class="activityType" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));?>
" /><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype') == 'Task') {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName());
?><input type="hidden" class="activityModule" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
" /><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><div><strong><span class="fas fa-tags fa-fw mr-1"></span><span class="value"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('status');?>
</span></strong>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['DATA_TYPE']->value != 'history') {?><span class="editDefaultStatus float-right u-cursor-pointer js-popover-tooltip delay0" data-js="popover" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getActivityStateModalUrl();?>
" data-content="<?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-check fa-fw"></span></span><?php }?></div><?php }
} else {
$_smarty_tpl->_assignInScope('MODULE_NAME', "Events");
?><input type="hidden" class="activityModule" value="Events" /><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><div><strong><span class="fas fa-tags fa-fw mr-1"></span><span class="value"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('status');?>
</span></strong>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['DATA_TYPE']->value != 'history') {?><span class="editDefaultStatus float-right u-cursor-pointer js-popover-tooltip delay0" data-js="popover" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getActivityStateModalUrl();?>
" data-content="<?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-check fa-fw"></span></span><?php }?></div><?php }
}?></div></div><div class="activityDescription"><div><span class="value"><span class="fas fa-align-justify fa-fw mr-1"></span><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('description') != '') {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('description'),120,'...');
} else { ?><span class="muted"><?php echo \App\Language::translate('LBL_NO_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span><?php }?></span>&nbsp;&nbsp;<?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><span class="editDescription u-cursor-pointer"><span class="fas fa-edit fa-fw" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></span><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('location')) {?><a target="_blank" rel="noreferrer" href="https://www.google.com/maps/search/<?php echo urlencode($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location'));?>
" class="float-right js-popover-tooltip delay0" data-js="popover" data-original-title="<?php echo \App\Language::translate('Location','Calendar');?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location');?>
"><span class="fas fa-map-marker-alt fa-fw"></span>&nbsp</a><?php }?><span class="float-right js-popover-tooltip delay0" data-js="popover" data-placement="left" data-class="activities" data-original-title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitytype',false,true,true));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject',false,false,40));?>
"data-content="<?php echo \App\Language::translate('Status',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('status',false,true,40));?>
<br /><?php echo \App\Language::translate('Start Time','Calendar');?>
: <?php echo $_smarty_tpl->tpl_vars['START_DATE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['START_TIME']->value;?>
<br /><?php echo \App\Language::translate('End Time','Calendar');?>
: <?php echo $_smarty_tpl->tpl_vars['END_DATE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['END_TIME']->value;
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')) {?><hr /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linkextend',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('link',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('process')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('process')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('process',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subprocess',false,false,40));
}?><hr /><?php echo \App\Language::translate('Created By',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('smcreatorid',false,false,40));?>
<br /><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('smownerid',false,false,40));
if ($_smarty_tpl->tpl_vars['SHAREDOWNER']->value) {?><div><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:&nbsp;<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHAREDOWNER']->value, 'SOWNERID', false, NULL, 'sowner', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SOWNERID']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['total'];
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last'] : null)) {?>,&nbsp;<?php }
echo \App\Purifier::encodeHtml(\App\Fields\Owner::getUserLabel($_smarty_tpl->tpl_vars['SOWNERID']->value));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }
if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Events') {
if (count($_smarty_tpl->tpl_vars['RECORD']->value->get('selectedusers')) > 0) {?><br /><?php echo \App\Language::translate('LBL_INVITE_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->get('selectedusers'), 'USER', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['USER']->value) {
if ($_smarty_tpl->tpl_vars['USER']->value) {
echo \App\Purifier::encodeHtml(\App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['USER']->value));
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?>"><span class="fas fa-info-circle fa-fw"></span></span><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><span class="2 edit d-none row"><?php $_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getModule()->getField('description'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get('description')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'multipicklist') {?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
[]' data-prev-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php } else { ?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php }?></span><?php }?></div></div></div><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last'] : null)) {?><hr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_PENDING_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><div class="d-flex py-1"><div class="ml-auto"><button type="button" class="btn btn-primary btn-sm moreRecentActivities mt-2"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
..</button></div></div><?php }?></div>
<?php }
}
