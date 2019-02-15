<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:38
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RecentActivitiesHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d852459bc9_35791670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8abc081198110e1d35fc2fc21a6c77a7268f9524' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RecentActivitiesHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d852459bc9_35791670 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-RecentActivitiesHeader row marginBottom10px"><div class="col-md-12 btn-toolbar justify-content-end"><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId() && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('ReviewingUpdates') && ModTracker_Record_Model::isNewChange($_smarty_tpl->tpl_vars['PARENT_RACORD_ID']->value,$_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId())) {?><button id="btnChangesReviewedOn" type="button" class="btn btn-success btn-sm btnChangesReviewedOn mr-1" title="<?php echo \App\Language::translate('BTN_CHANGES_REVIEWED_ON',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
"><span class="far fa-check-circle"></span></button><?php }?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'changes') {?>active<?php }?>"><input class="js-switch--recentActivities" type="radio" name="options" id="option1" data-js="change" data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-on-val="changes"data-basic-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-urlparams="whereCondition"autocomplete="off"> <?php echo \App\Language::translate('LBL_UPDATES',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TYPE']->value != 'changes') {?>active<?php }?>"><input class="js-switch--recentActivities" type="radio" name="options" id="option2" data-js="change" data-basic-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-text="data-off-text <?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-val="review"data-urlparams="whereCondition"autocomplete="off"> <?php echo \App\Language::translate('LBL_REVIEW_HISTORY',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</label></div></div></div>
<?php }
}
