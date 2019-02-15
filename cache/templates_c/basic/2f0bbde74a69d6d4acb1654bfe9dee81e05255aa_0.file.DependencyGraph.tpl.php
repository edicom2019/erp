<?php
/* Smarty version 3.1.31, created on 2019-02-14 14:19:33
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PickListDependency/DependencyGraph.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6578f5d89233_40283797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f0bbde74a69d6d4acb1654bfe9dee81e05255aa' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PickListDependency/DependencyGraph.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6578f5d89233_40283797 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PickListDependency-DependencyGraph"><div id="accordion" class="my-3"><div class="card border-light"><div class="card-header bg-transparent border-light" id="headingOne"><span class="mr-2"><span class="fas fa-info-circle align-middle mr-3"></span><?php echo \App\Language::translate('LBL_CONFIGURE_DEPENDENCY_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><h5 class="mb-0"><span class="btn btn-link px-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
..</span></h5></div><div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body" id="dependencyHelp"><ul><li><?php echo \App\Language::translate('LBL_CONFIGURE_DEPENDENCY_HELP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><li class="my-3"><?php echo htmlspecialchars_decode(\App\Language::translate('LBL_CONFIGURE_DEPENDENCY_HELP_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), ENT_QUOTES);?>
</li><li><?php echo \App\Language::translate('LBL_CONFIGURE_DEPENDENCY_HELP_3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="selectedCell p-1"> <?php echo \App\Language::translate('Selected Values',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </span></li></ul></div></div></div></div><div class="mb-3"><span class="btn-toolbar"><button class="btn sourceValues btn-light mr-2" type="button"><strong><span class="fas fa-hand-point-up mr-1"></span><?php echo \App\Language::translate('LBL_SELECT_SOURCE_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn unmarkAll btn-light" type="button"><strong><div class="fa-layers fa-fw mr-2"><span class="far fa-square" data-fa-transform="grow-6"></span><span class="fas fa-times" data-fa-transform="shrink-3"></span></div><?php echo \App\Language::translate('LBL_UNMARK_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></div><?php $_smarty_tpl->_assignInScope('SELECTED_MODULE', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourceModule'));
$_smarty_tpl->_assignInScope('SOURCE_FIELD', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield'));
$_smarty_tpl->_assignInScope('MAPPED_SOURCE_PICKLIST_VALUES', array());
$_smarty_tpl->_assignInScope('MAPPED_TARGET_PICKLIST_VALUES', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAPPED_VALUES']->value, 'MAPPING');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING']->value) {
$_smarty_tpl->_assignInScope('value', array_push($_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value,$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']));
$_tmp_array = isset($_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']) ? $_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']] = $_smarty_tpl->tpl_vars['MAPPING']->value['targetvalues'];
$_smarty_tpl->_assignInScope('MAPPED_TARGET_PICKLIST_VALUES', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<input type="hidden" class="allSourceValues" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value));?>
'/><div class="row depandencyTable m-0"><div class="col-2 col-lg-1 p-0  table-responsive"><table class="table table-sm themeTableColor" width="100%"><thead><tr class="blockHeader"><th class="text-center"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getSourceFieldLabel();?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value, 'TARGET_VALUE', false, NULL, 'targetValuesLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TARGET_VALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_targetValuesLoop']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_targetValuesLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_targetValuesLoop']->value['index'] : null) == 0) {?><tr><td class="text-center h5"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getTargetFieldLabel();?>
</td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><div class="col-10 col-lg-11 px-0 ml-0 dependencyMapping table-responsive"><table class="table-bordered table-sm table themeTableColor pickListDependencyTable"><thead><tr class="blockHeader"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value, 'SOURCE_PICKLIST_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value) {
?><th class="align-baseline" data-source-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value);?>
" style="<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value) && !in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,array_map('App\Purifier::decodeHtml',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))) {?>display: none;<?php }?>"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value, 'TARGET_VALUE', false, 'TARGET_INDEX', 'targetValuesLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TARGET_INDEX']->value => $_smarty_tpl->tpl_vars['TARGET_VALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_targetValuesLoop']->value['index']++;
?><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value, 'SOURCE_PICKLIST_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value) {
$_smarty_tpl->_assignInScope('targetValues', $_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value[\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value)]);
$_smarty_tpl->_assignInScope('SOURCE_INDEX', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingIndex']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingIndex']->value['index'] : null));
$_smarty_tpl->_assignInScope('IS_SELECTED', false);
if (empty($_smarty_tpl->tpl_vars['targetValues']->value) || in_array($_smarty_tpl->tpl_vars['TARGET_VALUE']->value,array_map('App\Purifier::decodeHtml',$_smarty_tpl->tpl_vars['targetValues']->value))) {
$_smarty_tpl->_assignInScope('IS_SELECTED', true);
}?><td data-source-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value);?>
'data-target-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TARGET_VALUE']->value);?>
'class="<?php if ($_smarty_tpl->tpl_vars['IS_SELECTED']->value) {?>selectedCell <?php } else { ?>unselectedCell <?php }?> targetValue picklistValueMapping u-cursor-pointer"<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value) && !in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,array_map('App\Purifier::decodeHtml',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))) {?>style="display: none;" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TARGET_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div><div class="modal sourcePicklistValuesModal modalCloneCopy fade" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header contentsBackground"><h5 class="modal-title"><span class="fas fa-hand-point-up mr-1"></span><?php echo \App\Language::translate('LBL_SELECT_SOURCE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="m-0 table-responsive"><table class="table table-borderless table-sm mb-0"><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value, 'SOURCE_VALUE', false, 'SOURCE_INDEX', 'sourceValuesLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_INDEX']->value => $_smarty_tpl->tpl_vars['SOURCE_VALUE']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index'] : null)%3 == 0) {?></tr><tr><?php }?><td><div class="form-group"><div class="controls checkbox"><input type="checkbox" class="sourceValue <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
"id="sourceValue-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index'] : null);?>
"data-source-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
"value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
"<?php if (empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value) || in_array($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value,array_map('App\Purifier::decodeHtml',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))) {?> checked <?php }?>/><label class="ml-1" for="sourceValue-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sourceValuesLoop']->value['index'] : null);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</label></div></div></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></table></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</div></div></div><div class="p-3"><div class="btn-toolbar  float-right"><button class="btn btn-success mr-2" type="submit"><span class="fa fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button type="button" class="cancelLink cancelDependency btn btn-danger text-white" title="<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fa fa-times u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><br/><br/></div></div>
<?php }
}
