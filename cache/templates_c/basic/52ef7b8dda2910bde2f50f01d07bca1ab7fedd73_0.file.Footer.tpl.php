<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0faef0af4_36570952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ef7b8dda2910bde2f50f01d07bca1ab7fedd73' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Footer.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0faef0af4_36570952 (Smarty_Internal_Template $_smarty_tpl) {
?>

</div></div></div></div></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER']->value) {?><input class="tpl-Footer d-none noprint" type="hidden" id="activityReminder" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_REMINDER']->value;?>
"/><footer class="c-footer fixed-bottom js-footer <?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?> c-footer--user-info-active <?php }?>"data-js="height"><?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?><div class="js-footer__user-info c-footer__user-info"><span class="mr-1"> <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span>(<span><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('email1');?>
</span><?php $_prefixVariable3=$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension');
if (!empty($_prefixVariable3)) {?>,<span class="ml-1"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension');?>
</span><?php }?>)</div><?php }?><div class="container-fluid px-0 px-md-1"><ul class="float-left pagination border-0"><li class="page-item"><a class="page-link" href="https://www.linkedin.com/groups/8177576" rel="noreferrer"><span class="fab fa-linkedin fa-2x" title="Linkedin"></span></a></li><li class="page-item"><a class="page-link" href="https://twitter.com/YetiForceEN" rel="noreferrer"><span class="fab fa-twitter-square fa-2x" title="Twitter"></span></a></li><li class="page-item"><a class="page-link" href="https://www.facebook.com/YetiForce-CRM-158646854306054/" rel="noreferrer"><span class="fab fa-facebook-square fa-2x" title="Facebook"></span></a></li><li class="page-item"><a class="page-link" href="https://github.com/YetiForceCompany/YetiForceCRM" rel="noreferrer"><span class="fab fa-github-square fa-2x" title="Github"></span></a></li></ul><div class="float-right p-0"><ul class="pagination"><li class="page-item"><a class="page-link mr-md-1" href="https://yetiforce.shop" rel="noreferrer"><span class="fas fa-shopping-cart fa-2x" title="yetiforce.shop"></span></a></li><li class="page-item u-cursor-pointer"><a class="page-link" data-toggle="modal" href="#" role="button" data-target="#yetiforceDetails"><span class="fas fa-info-circle fa-2x" title="YetiForceCRM"></span></a></li></ul></div><div class="mx-auto w-75"><?php $_smarty_tpl->_assignInScope('SCRIPT_TIME', round(microtime(true)-\App\Config::$startTime,3));
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {
$_smarty_tpl->_assignInScope('FOOTVR', (((((('[ver. ').($_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value)).('] [')).(\App\Language::translate('WEBLOADTIME'))).(': ')).($_smarty_tpl->tpl_vars['SCRIPT_TIME']->value)).('s.]'));
$_smarty_tpl->_assignInScope('FOOTVRM', (('[').($_smarty_tpl->tpl_vars['SCRIPT_TIME']->value)).('s.]'));
$_smarty_tpl->_assignInScope('FOOTOSP', '<em><a class="u-text-underline" href="index.php?module=Vtiger&view=Credits&parent=Settings">open source project</a></em>');
?><p class="text-center text-center <?php if (AppConfig::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>u-p-05per<?php }?>"><span class="d-none d-sm-inline ">Copyright &copy; YetiForce.com All rights reserved. <?php echo $_smarty_tpl->tpl_vars['FOOTVR']->value;?>
<br/><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','Vtiger',$_smarty_tpl->tpl_vars['FOOTOSP']->value);?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span></p><?php } else { ?><p class="text-center"><span class="d-none d-sm-inline">Copyright &copy; YetiForce.com All rights reserved.[<?php echo \App\Language::translate('WEBLOADTIME');?>
: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_TIME']->value;?>
s.]<br/><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','Vtiger','open source project');?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span></p><?php }?></div></footer><div class="modal fade" id="yetiforceDetails" tabindex="-1" role="dialog" aria-labelledby="yetiforceDetails"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="myModalLabel">YetiForceCRM <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>v<?php echo $_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value;
}?> - The best opensystem in the world</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p class="text-center"><img class="u-h-120px" src="<?php echo App\Layout::getPublicUrl('layouts/resources/Logo/blue_yetiforce_logo.png');?>
"title="YetiForceCRM" alt="YetiForceCRM"/></p><p>Copyright © YetiForce.com All rights reserved.</p><p>The Program is provided AS IS, without warranty. Licensed under <a href="https://github.com/YetiForceCompany/YetiForceCRM/blob/developer/licenses/LicenseEN.txt" target="_blank"><strong>YetiForce Public License 3.0</strong></a>.</p><p>YetiForce is based on two systems - <strong>VtigerCRM</strong> and <strong>SugarCRM</strong>.<br/><br/></p><div class="u-word-break"><p><span class="badge badge-secondary">License:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM/blob/developer/licenses/LicenseEN.txt" target="_blank"><strong>YetiForce Public License 3.0</strong></a></p><p><span class="badge badge-primary">WWW:</span> <a href="https://yetiforce.com" target="_blank" rel="noreferrer"><strong>https://yetiforce.com</strong></a></p><p><span class="badge badge-success">Code:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM" target="_blank" rel="noreferrer"><strong>https://github.com/YetiForceCompany/YetiForceCRM</strong></a></p><p><span class="badge badge-info">Documentation:</span> <a href="https://yetiforce.com/en/knowledge-base/documentation" target="_blank" rel="noreferrer"><strong>https://yetiforce.com/en/documentation.html</strong></a></p><p><span class="badge badge-warning">Issues:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM/issues" target="_blank" rel="noreferrer"><strong>https://github.com/YetiForceCompany/YetiForceCRM/issues</strong></a></p><p><span class="badge badge-primary">Shop:</span> <a href="https://yetiforce.shop/" target="_blank" rel="noreferrer"><strong>https://yetiforce.shop/</strong></a></p></div><ul class="text-center list-inline"><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer" href="https://www.linkedin.com/groups/8177576"><span class="fab fa-linkedin" title="LinkendIn"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer" href="https://twitter.com/YetiForceEN"><span class="fab fa-twitter-square" title="Twitter"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer" href="https://www.facebook.com/YetiForce-CRM-158646854306054/"><span class="fab fa-facebook-square" title="Facebook"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer" href="https://github.com/YetiForceCompany/YetiForceCRM"><span class="fab fa-github-square" title="Github"></span></a></li></ul></div><div class="modal-footer"><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fa fa-times u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer()->render();
}?></body></html>
<?php }
}
