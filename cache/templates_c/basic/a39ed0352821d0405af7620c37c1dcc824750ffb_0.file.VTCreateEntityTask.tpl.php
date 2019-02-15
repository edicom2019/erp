<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:26
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642eeecb2225_13563245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39ed0352821d0405af7620c37c1dcc824750ffb' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642eeecb2225_13563245 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('MAPPING_PANEL', $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->mappingPanel);
?><input type="hidden" id="taskFields" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->getFieldNames()));?>
" /><input type="hidden" id="mappingPanel" value="<?php echo $_smarty_tpl->tpl_vars['MAPPING_PANEL']->value;?>
" /><div class="form-group text-center"><div class="radio-inline"><label><input type="radio" name="mappingPanel" data-hide="getFromPanelMapp" data-show="createOwnMapp" id="optionsRadios1" value="0" <?php if (!$_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_CREATE_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="radio-inline"></div><div class="radio-inline"><label><input type="radio" name="mappingPanel" data-hide="createOwnMapp" data-show="getFromPanelMapp" id="optionsRadios2" value="1"<?php if ($_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_GET_FROM_PANEL_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><hr><br /><div class="createOwnMapp<?php if ($_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> d-none<?php }?>"><div class="row"><label class="col-md-4 col-form-label"><strong><?php echo \App\Language::translate('LBL_MODULES_TO_CREATE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></strong></label><div class="col-md-6"><?php $_smarty_tpl->_assignInScope('RELATED_MODULES_INFO', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getDependentModules());
$_smarty_tpl->_assignInScope('RELATED_MODULES', array_keys($_smarty_tpl->tpl_vars['RELATED_MODULES_INFO']->value));
$_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL_NAME', $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type);
?><select class="chzn-select createEntityModule" id="createEntityModule" name="entity_type" data-validation-engine='validate[required]' <?php if ($_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> disabled<?php }?>><option value=""><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULES']->value, 'MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type == $_smarty_tpl->tpl_vars['MODULE']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><br /></div><div class="getFromPanelMapp<?php if (!$_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> d-none<?php }?>"><div class="row"><label class="col-md-4 col-form-label"><strong><?php echo \App\Language::translate('LBL_SELECT_TEMPLATE_FOR_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></strong></label><div class="col-md-6"><select class="chzn-select createEntityModule" id="templatesMapp" name="entity_type" data-validation-engine='validate[required]'<?php if (!$_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> disabled<?php }?>><option value=""><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES_MAPPING']->value, 'TEMPLATE', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
$_smarty_tpl->_assignInScope('TEMPLATE_RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName());
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type == $_smarty_tpl->tpl_vars['TEMPLATE_RELATED_MODULE_NAME']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_RELATED_MODULE_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE_RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['TEMPLATE_RELATED_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><br /></div><div id="addCreateEntityContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CreateEntity.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
