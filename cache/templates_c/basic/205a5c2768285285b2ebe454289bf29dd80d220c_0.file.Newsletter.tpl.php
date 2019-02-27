<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:13:18
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Settings\SystemWarnings\YetiForce\Newsletter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cdce625d98_68390581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205a5c2768285285b2ebe454289bf29dd80d220c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Settings\\SystemWarnings\\YetiForce\\Newsletter.tpl',
      1 => 1551092131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cdce625d98_68390581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h6 class="h3"><?php echo App\Language::translate('LBL_SAVE_TO_NEWSLETTER','Settings:SystemWarnings');?>
</h6><p><?php echo App\Language::translate('LBL_NEWSLETTER_DESC','Settings:SystemWarnings');?>
</p><form class="validateForm" method="post" action="index.php"><div class="form-row"><div class="form-group col-md-4"><label for="first_name"><span class="redColor">*</span><?php echo App\Language::translate('First Name');?>
</label><input type="text" name="first_name" class="form-control" id="first_name" placeholder="<?php echo App\Language::translate('First Name');?>
"data-validation-engine="validate[required]"></div><div class="form-group col-md-4"><label for="last_name"><?php echo App\Language::translate('Last Name');?>
</label><input type="text" name="last_name" class="form-control" id="last_name" placeholder="<?php echo App\Language::translate('Last Name');?>
"></div><div class="form-group col-md-4"><label for="email"><span class="redColor">*</span><?php echo App\Language::translate('LBL_EMAIL_ADRESS');?>
</label><input type="text" name="email" class="form-control" id="email" placeholder="<?php echo App\Language::translate('LBL_EMAIL_ADRESS');?>
"data-validation-engine="validate[required,custom[email]]"></div></div><div class="float-right mr-2"><button type="button" class="btn btn-success ajaxBtn mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_SAVE','Settings:SystemWarnings');?>
</button><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<?php }
}
