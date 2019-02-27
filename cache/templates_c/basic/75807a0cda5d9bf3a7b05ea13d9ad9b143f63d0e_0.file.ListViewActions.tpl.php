<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:25
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\ListViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbb9a7c8b8_42425848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75807a0cda5d9bf3a7b05ea13d9ad9b143f63d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\ListViewActions.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbb9a7c8b8_42425848 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listViewActions paginationDiv pl-1 d-flex justify-content-end"><?php if ((method_exists($_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'isPagingSupported') && ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPagingSupported() == true)) || !method_exists($_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'isPagingSupported')) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div><?php if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value !== 'Settings' && $_smarty_tpl->tpl_vars['VIEW_MODEL']->value) {?><div class="pl-1"><?php $_smarty_tpl->_assignInScope('COLOR', AppConfig::search('LIST_ENTITY_STATE_COLOR'));
?><input type="hidden" id="entityState" value="<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('entityState')) {
echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
} else { ?>Active<?php }?>"><div class="dropdown dropdownEntityState u-remove-dropdown-icon"><button class="btn btn-light dropdown-toggle" type="button" id="dropdownEntityState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?><span class="fas fa-archive"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?><span class="fas fa-trash-alt"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?><span class="fas fa-bars"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ALL');?>
</span><?php } else { ?><span class="fas fa-undo-alt"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</span><?php }?></button><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEntityState"><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Active']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Active'];?>
;"<?php }?>><a class="dropdown-item<?php if (!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') || $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Active') {?> active<?php }?>" href="#" data-value="Active"><span class="fas fa-undo-alt"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</span></a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Archived']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Archived'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?> active<?php }?>" href="#" data-value="Archived"><span class="fas fa-archive"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</span></a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Trash']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Trash'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?> active<?php }?>" href="#" data-value="Trash"><span class="fas fa-trash-alt"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</span></a></li><li><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?> active<?php }?>" href="#" data-value="All"><span class="fas fa-bars"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ALL');?>
</span></a></li></ul></div></div><?php }?><input type="hidden" id="recordsCount" value="" /><input type="hidden" id="selectedIds" name="selectedIds" /><input type="hidden" id="excludedIds" name="excludedIds" />
<?php }
}
