<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:35:41
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Step4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642b3d5344c6_15155790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5848e9b17a2afa9baa0af693f411fe2ff0346cb9' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Step4.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642b3d5344c6_15155790 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="mfTemplateContents"><form name="editMFTemplate" action="index.php" method="post" id="mf_step4" class="form-horizontal"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getName();?>
"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step8" /><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getParentName();?>
" /><input type="hidden" class="step" value="4" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="col-md-12 paddingLRZero"><div class="card"><div class="card-header"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,4);?>
: <?php echo \App\Language::translate('LBL_PERMISSIONS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="card-body"><div class="form-group row mb-0"><label class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_GROUP_MEMBERS','Settings:Groups');?>
</label><div class="col-md-8"><select class="select2 form-control" multiple="true" id="permissions" name="permissions[]" data-placeholder="<?php echo \App\Language::translate('LBL_ADD_USERS_ROLES','Settings:Groups');?>
"><?php $_smarty_tpl->_assignInScope('TEMPLATE_MEMBERS', explode(',',$_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('permissions')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Groups_Member_Model::getAll(false), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->get('id');?>
"  data-member-type="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['MEMBER']->value->get('id'),$_smarty_tpl->tpl_vars['TEMPLATE_MEMBERS']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
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
</select></div></div></div><div class="card-footer clearfix"><div class="btn-toolbar float-right"><button class="btn btn-danger backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div></div></form></div>
<?php }
}
