<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:01:16
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTWatchdog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c64313cd3d263_04942990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952bfa263ed2d890b06b44109404e619dd53a5d1' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTWatchdog.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64313cd3d263_04942990 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row padding-bottom1per"><span class="col-md-3"><?php echo \App\Language::translate('LBL_SELECT_ACTION_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><select class="chzn-select form-control" name="type" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Fields\Picklist::getValuesName('notification_type'), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->type == $_smarty_tpl->tpl_vars['ITEM']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->srcWatchdogModule);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="row padding-bottom1per"><span class="col-md-3"><?php echo \App\Language::translate('LBL_SELECT_RECIPIENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><select class="chzn-select form-control" name="recipients" data-validation-engine="validate[required]"><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recipients == 'watchdog') {?>selected<?php }?> value="watchdog"><?php echo \App\Language::translate('LBL_WATCHING_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recipients == 'owner') {?>selected<?php }?> value="owner"><?php echo \App\Language::translate('LBL_OWNER_REKORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\PrivilegeUtil::getMembers(), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER', false, 'MEMBER_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER_ID']->value => $_smarty_tpl->tpl_vars['MEMBER']->value) {
?><option class="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['type'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recipients == $_smarty_tpl->tpl_vars['MEMBER_ID']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value['name']);?>
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
</select></div></div><div class="row padding-bottom1per checkbox"><span class="col-md-3"><?php echo \App\Language::translate('LBL_SKIP_CURRENT_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><input name="skipCurrentUser" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->skipCurrentUser) {?>checked<?php }?>></div></div><hr/><div class="row"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('VariablePanel.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'PARSER_TYPE'=>'mail','GRAY'=>true), 0, true);
?>
</div><hr/><div class="row padding-bottom1per"><span class="col-md-3"><?php echo \App\Language::translate('LBL_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><input name="title" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->title;?>
"></div></div><div class="row padding-bottom1per"><span class="col-md-3"><?php echo \App\Language::translate('LBL_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-md-9"><textarea class="form-control messageContent" name="message" rows="3"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->message) {
echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->message;
} else {
}?></textarea></div></div>	
<?php }
}
