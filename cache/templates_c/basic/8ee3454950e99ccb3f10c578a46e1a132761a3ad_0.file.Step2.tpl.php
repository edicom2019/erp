<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:49:21
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642e71c5a5a0_69638211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee3454950e99ccb3f10c578a46e1a132761a3ad' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642e71c5a5a0_69638211 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form name="EditWorkflow" action="index.php" method="post" id="workflow_step2" class="tpl-Settings-Workflows-Step2 form-horizontal"><input type="hidden" name="module" value="Workflows"/><input type="hidden" name="action" value="Save"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" class="step" value="2"/><input type="hidden" name="summary" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('summary');?>
"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('record');?>
"/><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('module_name');?>
"/><input type="hidden" name="execution_condition" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('execution_condition');?>
"/><input type="hidden" name="conditions" id="advanced_filter" value=''/><input type="hidden" id="olderConditions" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('conditions'));?>
'/><input type="hidden" name="filtersavedinnew" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('filtersavedinnew');?>
"/><input type="hidden" name="schtypeid" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schtypeid');?>
"/><input type="hidden" name="schtime" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schtime');?>
"/><input type="hidden" name="schdate" value=<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdate');?>
/><input type="hidden" name="schdayofweek" value=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdayofweek'));?>
/><input type="hidden" name="schdayofmonth" value=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdayofmonth'));?>
/><input type="hidden" name="schannualdates" value=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schannualdates'));?>
/><div class="" style="border:1px solid #ccc;"><?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value == false) {?><div class="alert alert-info"><?php echo \App\Language::translate('LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class=""><span class="col-md-6"><input type="radio" name="conditionstype" class="alignMiddle" checked=""/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo \App\Language::translate('LBL_USE_EXISTING_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="col-md-6"><input type="radio" id="enableAdvanceFilters" name="conditionstype" class="alignMiddle recreate"/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo \App\Language::translate('LBL_RECREATE_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span></div><br/><?php }?><div id="advanceFilterContainer" <?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value == false) {?> class="zeroOpacity js-conditions-container padding1per" <?php } else { ?> class="row js-conditions-container padding1per" <?php }?>data-js="container"><h5 class="padding-bottom1per col-md-10"><strong><?php echo \App\Language::translate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h5><div class="col-md-10"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0, true);
?>
</div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('EXECUTION_CONDITION'=>$_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('execution_condition')), 0, true);
?>
</div></div><br/><div class="float-right"><button class="btn btn-secondary backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success mr-1" type="submit"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-danger cancelLink" type="reset" onclick="javascript:window.history.back();"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><br/><br/></form>
<?php }
}
