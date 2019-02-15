<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:32:25
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642a7982df23_36138790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c2ea81871540fc3e446b2ffc6b36cc82d11e667' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642a7982df23_36138790 (Smarty_Internal_Template $_smarty_tpl) {
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
