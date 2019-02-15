<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642edf179247_13266495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52b7eeb646f1d3b2401e093dcddeaa2241646c6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642edf179247_13266495 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row"><div class="col-md-2"><?php echo \App\Language::translate('LBL_METHOD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 :</div><div class="col-md-8"><?php $_smarty_tpl->_assignInScope('ENTITY_METHODS', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getEntityMethods());
if (empty($_smarty_tpl->tpl_vars['ENTITY_METHODS']->value)) {?><div class="alert alert-info"><?php echo \App\Language::translate('LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php } else { ?><select name="methodName" class="chzn-select"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ENTITY_METHODS']->value, 'METHOD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->methodName == $_smarty_tpl->tpl_vars['METHOD']->value) {?>selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['METHOD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><?php }?></div></div>	<?php }
}
