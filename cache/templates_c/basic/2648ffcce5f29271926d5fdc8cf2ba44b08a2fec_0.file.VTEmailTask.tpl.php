<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:01
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTEmailTask.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ed56e3bb3_62065066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2648ffcce5f29271926d5fdc8cf2ba44b08a2fec' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTEmailTask.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ed56e3bb3_62065066 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="VtEmailTaskContainer"><div class=""><div class="form-row pb-3"><span class="col-md-12 form-row"><span class="col-md-2 col-form-label"><?php echo \App\Language::translate('LBL_SMTP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-10 px-0"><select id="task_timefields" name="smtp" class="select2 form-control " data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value=""><?php echo \App\Language::translate('LBL_DEFAULT');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Mail::getAll(), 'ITEM', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->smtp == $_smarty_tpl->tpl_vars['ID']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['host'];?>
)</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></span></div><div class="form-row pb-3"><span class="col-md-12 form-row"><span class="col-md-2"></span><span class="col-md-10 form-row d-flex align-items-center"><div class="col-md-3 mr-2 mb-0"><?php echo \App\Language::translate('LBL_CHECK_EMAIL_OPTOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><input type="checkbox" class="alignTop" value="true" name="emailoptout" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailoptout) {?>checked<?php }?>>&nbsp;</span></span></div><div class="form-row pb-3"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_FROM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><input data-validation-engine='validate[]' name="fromEmail" class="fields form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->fromEmail;?>
" /></div></span><div class="col-md-5"><div class="col-md-12 px-0"><select id="fromEmailOption" class="select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FROM_EMAIL_FIELD_OPTION']->value, 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VAL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VAL']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VAL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-row pb-3"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><div class="col-md-9"><input data-validation-engine='validate[required]' name="recepient" class="fields form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recepient;?>
" /></div></span><div class="col-md-5"><div class="col-md-12 px-0"><select class="task-fields select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value, 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VAL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VAL']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VAL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-row pb-3 <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc)) {?>d-none <?php }?>" id="ccContainer"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><input class="fields form-control" type="text" name="emailcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc;?>
" /></div></span><div class="col-md-5"><div class="col-md-12 px-0"><select class="task-fields select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" ><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value, 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VAL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VAL']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VAL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-row pb-3 <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc)) {?>d-none <?php }?>" id="bccContainer"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><input class="fields form-control" type="text" name="emailbcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc;?>
" /></div></span><div class="col-md-5"><div class="col-md-12 px-0"><select class="task-fields select2 form-control" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value, 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VAL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VAL']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VAL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-row pb-3 <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc)) && (!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))) {?> d-none <?php }?>"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label">&nbsp;</span><span class="col-md-9"><a class="btn btn-light <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc))) {?>d-none<?php }?>" role="button" id="ccLink"><?php echo \App\Language::translate('LBL_ADD_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;&nbsp;<a class="btn btn-light <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))) {?>d-none<?php }?>" role="button" id="bccLink"><?php echo \App\Language::translate('LBL_ADD_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></span></span></div><hr/><div class="form-row"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('VariablePanel.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'PARSER_TYPE'=>'mail','GRAY'=>true), 0, true);
?>
</div><hr/><div class="form-row pb-3"><span class="col-md-7 form-row"><span class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><div class="col-md-9"><input data-validation-engine='validate[required]' name="subject" class="fields form-control" type="text" name="subject" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->subject, ENT_QUOTES, 'UTF-8', true);?>
" id="subject" spellcheck="true" /></div></span></div><div class="pb-3"><textarea id="content" class="form-control" name="content"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->content;?>
</textarea></div></div></div>	
<?php }
}
