<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:49:49
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642e8d05c220_19392869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '855f68fad0deac316ca3c7d17a8c1f243105feaa' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Step3.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642e8d05c220_19392869 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form name="EditWorkflow" action="index.php" method="post" id="workflow_step3" class="tpl-Settings-Workflows-Step3 form-horizontal"><input type="hidden" name="module" value="Workflows"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
"/><input type="hidden" class="step" value="3"/><div class="btn-group"><a class="btn dropdown-toggle btn-light addButton" data-toggle="dropdown" href="#"><strong><?php echo \App\Language::translate('LBL_ADD_TASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;</a><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASK_TYPES']->value, 'TASK_TYPE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TASK_TYPE']->value) {
?><li><a class="u-cursor-pointer dropdown-item" data-url="<?php echo $_smarty_tpl->tpl_vars['TASK_TYPE']->value->getEditViewUrl();?>
&for_workflow=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TASK_TYPE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><div id="taskListContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('TasksList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><br/><div class="float-right"><button class="btn btn-secondary backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success" type="button" onclick="javascript:window.history.back();"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></form>
<?php }
}
