<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:18
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Settings\SystemWarnings\YetiForce\Stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdce5196c9_36567836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383633997d7aa160c5e80510a40636c8a78e0ef2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Settings\\SystemWarnings\\YetiForce\\Stats.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdce5196c9_36567836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="tpl-Settings-SystemWarnings-YetiForce-Stats form-horizontal row validateForm" method="post" action="index.php"><div class="col-md-12"><h3><?php echo App\Language::translate('LBL_STATS','Settings:SystemWarnings');?>
</h3><p><?php echo App\Language::translate('LBL_STATS_DESC','Settings:SystemWarnings');?>
</p><?php $_smarty_tpl->_assignInScope('COMPANY', \App\Company::getInstanceById());
?><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked disabled></div></div><input type="text" name="company_name" class="form-control" data-validation-engine="validate[required,funcCall[Vtiger_YetiForceCompanyName_Validator_Js.invokeValidation]]" placeholder="<?php echo App\Language::translate('LBL_NAME','Settings:Companies');?>
" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value->get('name');?>
"></div><br /><div class="input-group flex-nowrap"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked disabled></div></div><select class="select2 form-control" name="company_industry" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Companies_Module_Model::getIndustryList(), 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['COMPANY']->value->get('industry') == $_smarty_tpl->tpl_vars['ITEM']->value) {?>selected<?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><br /><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked disabled></div></div><input type="text" name="company_city" class="form-control" data-validation-engine="validate[required]" placeholder="<?php echo App\Language::translate('LBL_CITY','Settings:Companies');?>
" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value->get('city');?>
"></div><br /><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked disabled></div></div><input type="text" name="company_country" class="form-control" data-validation-engine="validate[required]" placeholder="<?php echo App\Language::translate('LBL_COUNTRY','Settings:Companies');?>
" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value->get('country');?>
"></div><br /><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked></div></div><input type="text" name="company_website" class="form-control" placeholder="<?php echo App\Language::translate('LBL_WEBSITE','Settings:Companies');?>
" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value->get('website');?>
"></div><br /><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" checked></div></div><input type="text" name="company_email" class="form-control" placeholder="<?php echo App\Language::translate('LBL_EMAIL','Settings:Companies');?>
" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value->get('email');?>
"></div><br /><div class="float-right"><button type="button" class="btn btn-success ajaxBtn mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_SEND','Settings:SystemWarnings');?>
</button><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div><div class="clearfix"></div></div></form>
<?php }
}
