<?php
/* Smarty version 3.1.31, created on 2019-02-11 14:18:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Login.Default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c618423c65e45_73535119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29c54d6c23c81ce63e84f2cbbccb980d7478b1f8' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Login.Default.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c618423c65e45_73535119 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('MODULE', 'Users');
?><div class="container"><div id="login-area" class="login-area"><div class="login-space"></div><div class="logo"><img title="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get('name');?>
" height="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get('logo_login_height');?>
px" class="logo" src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->getLogo('logo_login')->get('imageUrl');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value->get('name');?>
"></div><div class="" id="loginDiv"><?php if (!$_smarty_tpl->tpl_vars['IS_BLOCKED_IP']->value) {?><form class="login-form" action="index.php?module=Users&action=Login" method="POST" <?php if (!AppConfig::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off"<?php }?>><div class='fieldContainer mx-0 form-row col-md-12'><div class='mx-0 col-sm-10'><label for="username" class="sr-only"><?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group first-group"><input name="username" type="text" id="username" class="form-control form-control-lg" <?php if (\AppConfig::main('systemMode') === 'demo') {?>value="demo"<?php }?> placeholder="<?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" required="" <?php if (!AppConfig::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off"<?php }?> autofocus=""><div class="input-group-append"><div class="input-group-text"><i class="fas fa-user"></i></div></div></div><label for="password" class="sr-only"><?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group <?php if ($_smarty_tpl->tpl_vars['LANGUAGE_SELECTION']->value || $_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {?>first-group <?php }?>"><input name="password" type="password" class="form-control form-control-lg" title="<?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="password" name="password" <?php if (\AppConfig::main('systemMode') === 'demo') {?>value="demo"<?php }?> <?php if (!AppConfig::security('LOGIN_PAGE_REMEMBER_CREDENTIALS')) {?>autocomplete="off"<?php }?> placeholder="<?php echo \App\Language::translate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><div class="input-group-append"><div class="input-group-text"><i class="fas fa-briefcase"></i></div></div></div><?php $_smarty_tpl->_assignInScope('COUNTERFIELDS', 2);
if ($_smarty_tpl->tpl_vars['LANGUAGE_SELECTION']->value) {
$_smarty_tpl->_assignInScope('COUNTERFIELDS', $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value+1);
$_smarty_tpl->_assignInScope('DEFAULT_LANGUAGE', AppConfig::main('default_language'));
?><div class="input-group input-group-lg form-group mb-0 <?php if ($_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {?>first-group <?php }?>"><select class="form-control-lg form-control" title="<?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="loginLanguage"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Language::getAll(), 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['KEY']->value == $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE']->value) {?> selected <?php }?>  value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><div class="input-group-text"><i class="fas fa-language"></i></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['LAYOUT_SELECTION']->value) {
$_smarty_tpl->_assignInScope('COUNTERFIELDS', $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value+1);
?><div class="form-group mb-0"><select class="form-control-lg form-control" title="<?php echo \App\Language::translate('LBL_SELECT_LAYOUT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="layout"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Layout::getAllLayouts(), 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }?></div><div class="col-sm-2"><button class="btn btn-lg btn-primary btn-block heightButtonPhone heightDiv_<?php echo $_smarty_tpl->tpl_vars['COUNTERFIELDS']->value;?>
" type="submit" title="<?php echo \App\Language::translate('LBL_SIGN_IN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><strong><span class="fas fa-chevron-right"></span></strong></button></div></div><input name="fingerprint" type="hidden" id="fingerPrint" value=""></form><?php if (AppConfig::security('RESET_LOGIN_PASSWORD') && App\Mail::getDefaultSmtp()) {?><div class="form-group"><div class=""><a href="#" id="forgotpass" ><?php echo \App\Language::translate('ForgotPassword',$_smarty_tpl->tpl_vars['MODULE']->value);?>
?</a></div></div><?php }
}?><div class="form-group col-12 p-0"><?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value) {?><div class="alert <?php if ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value === 'success') {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value === 'error') {?>alert-danger<?php } else { ?>alert-warning<?php }?>"><p><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['IS_BLOCKED_IP']->value) {?><div class="alert alert-danger form-row"><div class="col-md-12 d-flex justify-content-center"><span class="fas fa-minus-circle fontSizeIcon"></span></div><div class="col-md-12"><p><?php echo \App\Language::translate('LBL_IP_IS_BLOCKED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div></div><?php }?></div></div><?php if (AppConfig::security('RESET_LOGIN_PASSWORD') && App\Mail::getDefaultSmtp()) {?><div class="d-none" id="forgotPasswordDiv"><form class="forgot-form" action="index.php?module=Users&action=ForgotPassword" method="POST"><div class="fieldContainer mx-0 form-row col-md-12"><div class="login-form mx-0 form-row col-sm-10"><label for="usernameFp" class="sr-only"><?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group first-group"><input type="text" class="form-control form-control-lg" title="<?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="usernameFp" name="user_name" placeholder="<?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><div class="input-group-append"><div class="input-group-text"><i class="fas fa-user"></i></div></div></div><label for="emailId" class="sr-only"><?php echo \App\Language::translate('LBL_EMAIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="input-group form-group"><input type="text" class="form-control form-control-lg" autocomplete="off" title="<?php echo \App\Language::translate('LBL_EMAIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="emailId" name="emailId" placeholder="Email"><div class="input-group-append"><div class="input-group-text"><i class="fas fa-envelope"></i></div></div></div></div><div class="col-sm-2"><button type="submit" id="retrievePassword" class="btn btn-lg btn-primary btn-block sbutton heightDiv_5" title="Retrieve Password"><strong>></strong></button></div></div></form><div class="login-text form-group"><a href="#" id="backButton" ><?php echo \App\Language::translate('LBL_TO_CRM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div><?php }?></div></div><?php echo '<script'; ?>
>
		jQuery(document).ready(function () {
			jQuery("#fingerPrint").val(new DeviceUUID().get());
			jQuery("button.close").on('click', function () {
				jQuery(".visible-phone").css('visibility', 'hidden');
			});
			jQuery("a#forgotpass").on('click', function () {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").removeClass('d-none');
				jQuery("#forgotPasswordDiv").show();
			});
			jQuery("a#backButton").on('click', function () {
				jQuery("#loginDiv").removeClass('d-none');
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			jQuery("form.forgot-form").on('submit', function (event) {
				if ($("#usernameFp").val() === "" || $("#emailId").val() === "") {
					event.preventDefault();
				}
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
