<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RecentActivitiesTimeLine.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d850552c53_39706316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be49c4ce323ea7e01a7e0eba1f30205f484e6cfe' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RecentActivitiesTimeLine.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d850552c53_39706316 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="recentActivitiesContainer pt-2"><input type="hidden" id="updatesCurrentPage" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
" /><input type="hidden" id="updatesPageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['RECENT_ACTIVITIES']->value)) {
$_smarty_tpl->_assignInScope('LIST_ENTITY_STATE_COLOR', AppConfig::search('LIST_ENTITY_STATE_COLOR'));
?><div id="updates" class="w-100"><div class="table-responsive"><ul class="timeline"><?php $_smarty_tpl->_assignInScope('COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITIES']->value, 'RECENT_ACTIVITY', false, NULL, 'recentActivites', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value) {
$_smarty_tpl->_assignInScope('PROCEED', TRUE);
if (($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationLink()) || ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationUnLink())) {
$_smarty_tpl->_assignInScope('RELATION', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getRelationInstance());
if (!($_smarty_tpl->tpl_vars['RELATION']->value->getLinkedRecord())) {
$_smarty_tpl->_assignInScope('PROCEED', FALSE);
}
}
if ($_smarty_tpl->tpl_vars['PROCEED']->value) {?><li><?php if ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isReviewed() && !($_smarty_tpl->tpl_vars['COUNT']->value == 0 && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page') == 1)) {
$_smarty_tpl->_assignInScope('NEW_CHANGE', false);
?><div class="lineOfText"><div><?php echo \App\Language::translate('LBL_REVIEWED',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</div></div><?php }
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
if ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isCreate()) {?><div class="d-flex"><span class="flex-shrink-0 fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle text-success" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 !important;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item <?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isCreate"><div class="float-sm-left imageContainer"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
" ><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getName();?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
<div class="float-right time text-muted"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getParent()->get('createdtime'));?>
</div><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getFieldInstances(), 'FIELDMODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDMODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->isViewable() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getDisplayType() != '5') {?><div class='font-x-small updateInfoContainer'><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>:&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '') {?><strong class="moreContent"><span class="teaserContent"><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getNewValue());?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->has('fullPostValue')) {?><span class="fullContent d-none"><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('fullPostValue');?>
</span><button type="button" class="btn btn-info btn-sm moreBtn" data-on="<?php echo \App\Language::translate('LBL_MORE_BTN');?>
" data-off="<?php echo \App\Language::translate('LBL_HIDE_BTN');?>
"><?php echo \App\Language::translate('LBL_MORE_BTN');?>
</button><?php }?></strong><?php }?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isUpdate() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferEdit()) {?><div class="d-flex"><span class="flex-shrink-0 fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isUpdate"><div class="float-sm-left imageContainer"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getDisplayName();?>
&nbsp;</strong> <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
<div class="float-right time text-muted"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getFieldInstances(), 'FIELDMODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDMODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->isViewable() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getDisplayType() != '5') {?><div class='font-x-small updateInfoContainer'><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>:&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('prevalue') != '' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '' && !($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0' || $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('prevalue') == '0'))) {?>&nbsp;<?php echo \App\Language::translate('LBL_FROM');?>
&nbsp;<strong class="moreContent"><span class="teaserContent"><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getOldValue());?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->has('fullPreValue')) {?><span class="fullContent d-none"><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('fullPreValue');?>
</span><button type="button" class="btn btn-info btn-sm moreBtn" data-on="<?php echo \App\Language::translate('LBL_MORE_BTN');?>
" data-off="<?php echo \App\Language::translate('LBL_HIDE_BTN');?>
"><?php echo \App\Language::translate('LBL_MORE_BTN');?>
</button><?php }?></strong><?php } elseif ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '' || ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0')) {?>&nbsp;<strong><?php echo \App\Language::translate('LBL_DELETED','ModTracker');?>
</strong>( <del><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getOldValue());?>
</del> )<?php } else { ?>&nbsp;<?php echo \App\Language::translate('LBL_CHANGED');
}
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '' && !($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0')) {?>&nbsp;<?php echo \App\Language::translate('LBL_TO');?>
&nbsp;<strong class="moreContent"><span class="teaserContent"><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getNewValue());?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->has('fullPostValue')) {?><span class="fullContent d-none"><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('fullPostValue');?>
</span><button type="button" class="btn btn-info btn-sm moreBtn" data-on="<?php echo \App\Language::translate('LBL_MORE_BTN');?>
" data-off="<?php echo \App\Language::translate('LBL_HIDE_BTN');?>
"><?php echo \App\Language::translate('LBL_MORE_BTN');?>
</button><?php }?></strong><?php }?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div></div><?php } elseif (($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationUnLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferUnLink())) {?><div class="d-flex"><span class="flex-shrink-0 fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isRelationLink isRelationUnLink"><div class="float-sm-left imageContainer"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-right time text-muted"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><span><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getName();?>
&nbsp;</strong></span><?php $_smarty_tpl->_assignInScope('RELATION', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getRelationInstance());
?><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
&nbsp;</span><span><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATION']->value->getLinkedRecord()->getModuleName(),'DetailView',$_smarty_tpl->tpl_vars['RELATION']->value->getLinkedRecord()->getId())) {?><strong class="moreContent"><span class="teaserContent"><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['RELATION']->value->getValue());?>
</span><?php if ($_smarty_tpl->tpl_vars['RELATION']->value->has('fullValue')) {?><span class="fullContent d-none"><?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('fullValue');?>
</span><button type="button" class="btn btn-info btn-sm moreBtn" data-on="<?php echo \App\Language::translate('LBL_MORE_BTN');?>
" data-off="<?php echo \App\Language::translate('LBL_HIDE_BTN');?>
"><?php echo \App\Language::translate('LBL_MORE_BTN');?>
</button><?php }?></strong><?php }?></span><span>&nbsp;(<?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['RELATION']->value->getLinkedRecord()->getModuleName()),$_smarty_tpl->tpl_vars['RELATION']->value->getLinkedRecord()->getModuleName());?>
)</span></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isChangeState() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferDelete()) {?><div class="d-flex"><span class="fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item isDisplayed"><div class="imageContainer float-left"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-right time text-muted"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><div><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getName();?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isConvertToAccount()) {?><div class="d-flex"><span class="fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isConvertToAccount"><div class="float-left imageContainer"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getName();?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div><span class="time float-right"><span><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</span></span></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isDisplayed()) {?><div class="d-flex"><span class="fa-layers fa-fw fa-2x u-ml-minus-5px mt-2"><span class="fas fa-circle" style="color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"></span><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 text-light" data-fa-transform="shrink-8"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item isDisplayed"><div class="float-left imageContainer"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-left"><strong><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getName();?>
</strong> &nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div><span class="time float-right"><span><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</span></span></div></div></div><?php }?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><?php } else { ?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECENT_UPDATES');?>
</p></div><?php }?><input type="hidden" id="newChange" value="<?php echo $_smarty_tpl->tpl_vars['NEW_CHANGE']->value;?>
" /><div class="d-flex py-1 px-1 js-more-link"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><div class="ml-auto"><button type="button" class="btn btn-primary btn-sm moreRecentUpdates"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
..</button></div><?php }?></div></div>
<?php }
}
